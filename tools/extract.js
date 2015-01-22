/**
 *   Extract function documentation from .php file
 *   and generate .xml for Notepad++
 */

var fs = require('fs');
var path = require('path');


var state = false;
var params = {};
var defs = {};

var funcs = {};

fs.readFileSync(path.join(__dirname, 'phpunit_partial.php'))
.toString('utf8')
.split(/[\r\n]+/).forEach(function (ln) {
    ln = ln.trim();
    if ( state ) {
        if ( ln.substr(0, 8) == 'function' ) {
            state = false;
            ln = ln.substr(9).trim().split(/[\(\)]/);
            var n = ln[0];
            ln = ln[1];
            ln = ln.split(/\,/);
            ln.forEach(function (v) {
                if ( v ) {
                    v = v.trim().split(/\$/);
                    v = v[1].split(/[\s\=]+/);
                    if ( v.length == 2 ) {
                        var p = v[0];
                        var d = v[1];
                        defs[p] = d;
                    }
                }
            });
            
            funcs[n] = [params, defs];
            params = {};
            defs = {};
        }
        else {
            if ( ln.substr(0, 8) == '* @param' ) {
                ln = ln.substr(9).trim().split(/[\s\$]+/);
                var t = ln[0];
                var p = ln[1];
                params[p] = t;
            }
        }
    }
    else {
        if ( ln == '/**' ) {
            state = true;
        }
    }
});


var fn = path.join(__dirname, '/npp_phpunit.json');
console.log('Saving "npp_phpunit.json"...');
fs.writeFileSync(fn, JSON.stringify(funcs, null, true));


var xml = [];
Object.keys(funcs).forEach(function (k) {
    var o = funcs[k];
    xml.push('<KeyWord name="'+k+'" func="yes">');
    xml.push('\t<Overload retVal="void">');
    var params = o[0];
    var defs = o[1];
    Object.keys(params).forEach(function (k) {
        var o = params[k];
        var v = o + ' ' + k;
        if ( k in defs ) {
            v = '['+v+'='+defs[k]+']';
        }
        xml.push('\t\t<Param name="'+v+'"/>');
    });
    
    
    xml.push('\t</Overload>');
    xml.push('</KeyWord>');
});

xml = xml.join('\n');

var fn = path.join(__dirname, '/npp_phpunit.xml');
console.log('Saving "npp_phpunit.xml"...');
fs.writeFileSync(fn, xml);





