/**
 * Asserts that an array has a specified key.
 *
 * @param  mixed  $key
 * @param  array|ArrayAccess  $array
 * @param  string $message
 * @since  Method available since Release 3.0.0
 */
function assertArrayHasKey($key, $array, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertArrayHasKey',
        func_get_args()
    );
}

/**
 * Asserts that an array does not have a specified key.
 *
 * @param  mixed  $key
 * @param  array|ArrayAccess  $array
 * @param  string $message
 * @since  Method available since Release 3.0.0
 */
function assertArrayNotHasKey($key, $array, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertArrayNotHasKey',
        func_get_args()
    );
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object contains a needle.
 *
 * @param  mixed   $needle
 * @param  string  $haystackAttributeName
 * @param  mixed   $haystackClassOrObject
 * @param  string  $message
 * @param  boolean $ignoreCase
 * @param  boolean $checkForObjectIdentity
 * @param  boolean $checkForNonObjectIdentity
 * @since  Method available since Release 3.0.0
 */
function assertAttributeContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeContains',
        func_get_args()
    );
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object contains only values of a given type.
 *
 * @param  string  $type
 * @param  string  $haystackAttributeName
 * @param  mixed   $haystackClassOrObject
 * @param  boolean $isNativeType
 * @param  string  $message
 * @since  Method available since Release 3.1.4
 */
function assertAttributeContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = null, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeContainsOnly',
        func_get_args()
    );
}

/**
 * Asserts the number of elements of an array, Countable or Traversable
 * that is stored in an attribute.
 *
 * @param integer $expectedCount
 * @param string  $haystackAttributeName
 * @param mixed   $haystackClassOrObject
 * @param string  $message
 * @since Method available since Release 3.6.0
 */
function assertAttributeCount($expectedCount, $haystackAttributeName, $haystackClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeCount',
        func_get_args()
    );
}

/**
 * Asserts that a static attribute of a class or an attribute of an object
 * is empty.
 *
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertAttributeEmpty($haystackAttributeName, $haystackClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeEmpty',
        func_get_args()
    );
}

/**
 * Asserts that a variable is equal to an attribute of an object.
 *
 * @param  mixed   $expected
 * @param  string  $actualAttributeName
 * @param  string  $actualClassOrObject
 * @param  string  $message
 * @param  float   $delta
 * @param  integer $maxDepth
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 */
function assertAttributeEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeEquals',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is greater than another value.
 *
 * @param  mixed   $expected
 * @param  string  $actualAttributeName
 * @param  string  $actualClassOrObject
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertAttributeGreaterThan($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeGreaterThan',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is greater than or equal to another value.
 *
 * @param  mixed   $expected
 * @param  string  $actualAttributeName
 * @param  string  $actualClassOrObject
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertAttributeGreaterThanOrEqual($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeGreaterThanOrEqual',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertAttributeInstanceOf($expected, $attributeName, $classOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeInstanceOf',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertAttributeInternalType($expected, $attributeName, $classOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeInternalType',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is smaller than another value.
 *
 * @param  mixed   $expected
 * @param  string  $actualAttributeName
 * @param  string  $actualClassOrObject
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertAttributeLessThan($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeLessThan',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is smaller than or equal to another value.
 *
 * @param  mixed   $expected
 * @param  string  $actualAttributeName
 * @param  string  $actualClassOrObject
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertAttributeLessThanOrEqual($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeLessThanOrEqual',
        func_get_args()
    );
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object does not contain a needle.
 *
 * @param  mixed   $needle
 * @param  string  $haystackAttributeName
 * @param  mixed   $haystackClassOrObject
 * @param  string  $message
 * @param  boolean $ignoreCase
 * @param  boolean $checkForObjectIdentity
 * @param  boolean $checkForNonObjectIdentity
 * @since  Method available since Release 3.0.0
 */
function assertAttributeNotContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotContains',
        func_get_args()
    );
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object does not contain only values of a given
 * type.
 *
 * @param  string  $type
 * @param  string  $haystackAttributeName
 * @param  mixed   $haystackClassOrObject
 * @param  boolean $isNativeType
 * @param  string  $message
 * @since  Method available since Release 3.1.4
 */
function assertAttributeNotContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = null, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotContainsOnly',
        func_get_args()
    );
}

/**
 * Asserts the number of elements of an array, Countable or Traversable
 * that is stored in an attribute.
 *
 * @param integer $expectedCount
 * @param string  $haystackAttributeName
 * @param mixed   $haystackClassOrObject
 * @param string  $message
 * @since Method available since Release 3.6.0
 */
function assertAttributeNotCount($expectedCount, $haystackAttributeName, $haystackClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotCount',
        func_get_args()
    );
}

/**
 * Asserts that a static attribute of a class or an attribute of an object
 * is not empty.
 *
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertAttributeNotEmpty($haystackAttributeName, $haystackClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotEmpty',
        func_get_args()
    );
}

/**
 * Asserts that a variable is not equal to an attribute of an object.
 *
 * @param  mixed   $expected
 * @param  string  $actualAttributeName
 * @param  string  $actualClassOrObject
 * @param  string  $message
 * @param  float   $delta
 * @param  integer $maxDepth
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 */
function assertAttributeNotEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotEquals',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertAttributeNotInstanceOf($expected, $attributeName, $classOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotInstanceOf',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertAttributeNotInternalType($expected, $attributeName, $classOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotInternalType',
        func_get_args()
    );
}

/**
 * Asserts that a variable and an attribute of an object do not have the
 * same type and value.
 *
 * @param  mixed  $expected
 * @param  string $actualAttributeName
 * @param  object $actualClassOrObject
 * @param  string $message
 */
function assertAttributeNotSame($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotSame',
        func_get_args()
    );
}

/**
 * Asserts that a variable and an attribute of an object have the same type
 * and value.
 *
 * @param  mixed  $expected
 * @param  string $actualAttributeName
 * @param  object $actualClassOrObject
 * @param  string $message
 */
function assertAttributeSame($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeSame',
        func_get_args()
    );
}

/**
 * Asserts that a class has a specified attribute.
 *
 * @param  string $attributeName
 * @param  string $className
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertClassHasAttribute($attributeName, $className, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertClassHasAttribute',
        func_get_args()
    );
}

/**
 * Asserts that a class has a specified static attribute.
 *
 * @param  string $attributeName
 * @param  string $className
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertClassHasStaticAttribute($attributeName, $className, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertClassHasStaticAttribute',
        func_get_args()
    );
}

/**
 * Asserts that a class does not have a specified attribute.
 *
 * @param  string $attributeName
 * @param  string $className
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertClassNotHasAttribute($attributeName, $className, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertClassNotHasAttribute',
        func_get_args()
    );
}

/**
 * Asserts that a class does not have a specified static attribute.
 *
 * @param  string $attributeName
 * @param  string $className
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertClassNotHasStaticAttribute($attributeName, $className, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertClassNotHasStaticAttribute',
        func_get_args()
    );
}

/**
 * Asserts that a haystack contains a needle.
 *
 * @param  mixed   $needle
 * @param  mixed   $haystack
 * @param  string  $message
 * @param  boolean $ignoreCase
 * @param  boolean $checkForObjectIdentity
 * @param  boolean $checkForNonObjectIdentity
 * @since  Method available since Release 2.1.0
 */
function assertContains($needle, $haystack, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertContains',
        func_get_args()
    );
}

/**
 * Asserts that a haystack contains only values of a given type.
 *
 * @param  string  $type
 * @param  mixed   $haystack
 * @param  boolean $isNativeType
 * @param  string  $message
 * @since  Method available since Release 3.1.4
 */
function assertContainsOnly($type, $haystack, $isNativeType = null, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertContainsOnly',
        func_get_args()
    );
}

/**
 * Asserts that a haystack contains only instances of a given classname
 *
 * @param string $classname
 * @param array|Traversable $haystack
 * @param string $message
 */
function assertContainsOnlyInstancesOf($classname, $haystack, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertContainsOnlyInstancesOf',
        func_get_args()
    );
}

/**
 * Asserts the number of elements of an array, Countable or Traversable.
 *
 * @param integer $expectedCount
 * @param mixed   $haystack
 * @param string  $message
 */
function assertCount($expectedCount, $haystack, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertCount',
        func_get_args()
    );
}

/**
 * Asserts that a variable is empty.
 *
 * @param  mixed   $actual
 * @param  string  $message
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertEmpty($actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertEmpty',
        func_get_args()
    );
}

/**
 * Asserts that a hierarchy of DOMElements matches.
 *
 * @param DOMElement $expectedElement
 * @param DOMElement $actualElement
 * @param boolean $checkAttributes
 * @param string  $message
 * @author Mattis Stordalen Flister <mattis@xait.no>
 * @since  Method available since Release 3.3.0
 */
function assertEqualXMLStructure(DOMElement $expectedElement, DOMElement $actualElement, $checkAttributes = false, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertEqualXMLStructure',
        func_get_args()
    );
}

/**
 * Asserts that two variables are equal.
 *
 * @param  mixed   $expected
 * @param  mixed   $actual
 * @param  string  $message
 * @param  float   $delta
 * @param  integer $maxDepth
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 */
function assertEquals($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertEquals',
        func_get_args()
    );
}

/**
 * Asserts that a condition is not true.
 *
 * @param  boolean  $condition
 * @param  string   $message
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertNotTrue($condition, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotTrue',
        func_get_args()
    );
}

/**
 * Asserts that a condition is false.
 *
 * @param  boolean  $condition
 * @param  string   $message
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertFalse($condition, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertFalse',
        func_get_args()
    );
}

/**
 * Asserts that the contents of one file is equal to the contents of another
 * file.
 *
 * @param  string  $expected
 * @param  string  $actual
 * @param  string  $message
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 * @since  Method available since Release 3.2.14
 */
function assertFileEquals($expected, $actual, $message = '', $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertFileEquals',
        func_get_args()
    );
}

/**
 * Asserts that a file exists.
 *
 * @param  string $filename
 * @param  string $message
 * @since  Method available since Release 3.0.0
 */
function assertFileExists($filename, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertFileExists',
        func_get_args()
    );
}

/**
 * Asserts that the contents of one file is not equal to the contents of
 * another file.
 *
 * @param  string  $expected
 * @param  string  $actual
 * @param  string  $message
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 * @since  Method available since Release 3.2.14
 */
function assertFileNotEquals($expected, $actual, $message = '', $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertFileNotEquals',
        func_get_args()
    );
}

/**
 * Asserts that a file does not exist.
 *
 * @param  string $filename
 * @param  string $message
 * @since  Method available since Release 3.0.0
 */
function assertFileNotExists($filename, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertFileNotExists',
        func_get_args()
    );
}

/**
 * Asserts that a value is greater than another value.
 *
 * @param  mixed   $expected
 * @param  mixed   $actual
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertGreaterThan($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertGreaterThan',
        func_get_args()
    );
}

/**
 * Asserts that a value is greater than or equal to another value.
 *
 * @param  mixed   $expected
 * @param  mixed   $actual
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertGreaterThanOrEqual($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertGreaterThanOrEqual',
        func_get_args()
    );
}

/**
 * Asserts that a variable is of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertInstanceOf($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertInstanceOf',
        func_get_args()
    );
}

/**
 * Asserts that a variable is of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertInternalType($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertInternalType',
        func_get_args()
    );
}

/**
 * Asserts that a string is a valid JSON string.
 *
 * @param  string $filename
 * @param  string $message
 * @since  Method available since Release 3.7.20
 */
function assertJson($expectedJson, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJson',
        func_get_args()
    );
}

/**
 * Asserts that two JSON files are equal.
 *
 * @param  string $expectedFile
 * @param  string $actualFile
 * @param  string $message
 */
function assertJsonFileEqualsJsonFile($expectedFile, $actualFile, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJsonFileEqualsJsonFile',
        func_get_args()
    );
}

/**
 * Asserts that two JSON files are not equal.
 *
 * @param  string $expectedFile
 * @param  string $actualFile
 * @param  string $message
 */
function assertJsonFileNotEqualsJsonFile($expectedFile, $actualFile, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJsonFileNotEqualsJsonFile',
        func_get_args()
    );
}

/**
 * Asserts that the generated JSON encoded object and the content of the given file are equal.
 *
 * @param string $expectedFile
 * @param string $actualJson
 * @param string $message
 */
function assertJsonStringEqualsJsonFile($expectedFile, $actualJson, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJsonStringEqualsJsonFile',
        func_get_args()
    );
}

/**
 * Asserts that two given JSON encoded objects or arrays are equal.
 *
 * @param string $expectedJson
 * @param string $actualJson
 * @param string $message
 */
function assertJsonStringEqualsJsonString($expectedJson, $actualJson, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJsonStringEqualsJsonString',
        func_get_args()
    );
}

/**
 * Asserts that the generated JSON encoded object and the content of the given file are not equal.
 *
 * @param string $expectedFile
 * @param string $actualJson
 * @param string $message
 */
function assertJsonStringNotEqualsJsonFile($expectedFile, $actualJson, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJsonStringNotEqualsJsonFile',
        func_get_args()
    );
}

/**
 * Asserts that two given JSON encoded objects or arrays are not equal.
 *
 * @param string $expectedJson
 * @param string $actualJson
 * @param string $message
 */
function assertJsonStringNotEqualsJsonString($expectedJson, $actualJson, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJsonStringNotEqualsJsonString',
        func_get_args()
    );
}

/**
 * Asserts that a value is smaller than another value.
 *
 * @param  mixed   $expected
 * @param  mixed   $actual
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertLessThan($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertLessThan',
        func_get_args()
    );
}

/**
 * Asserts that a value is smaller than or equal to another value.
 *
 * @param  mixed   $expected
 * @param  mixed   $actual
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertLessThanOrEqual($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertLessThanOrEqual',
        func_get_args()
    );
}

/**
 * Asserts that a haystack does not contain a needle.
 *
 * @param  mixed   $needle
 * @param  mixed   $haystack
 * @param  string  $message
 * @param  boolean $ignoreCase
 * @param  boolean $checkForObjectIdentity
 * @param  boolean $checkForNonObjectIdentity
 * @since  Method available since Release 2.1.0
 */
function assertNotContains($needle, $haystack, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotContains',
        func_get_args()
    );
}

/**
 * Asserts that a haystack does not contain only values of a given type.
 *
 * @param  string  $type
 * @param  mixed   $haystack
 * @param  boolean $isNativeType
 * @param  string  $message
 * @since  Method available since Release 3.1.4
 */
function assertNotContainsOnly($type, $haystack, $isNativeType = null, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotContainsOnly',
        func_get_args()
    );
}

/**
 * Asserts the number of elements of an array, Countable or Traversable.
 *
 * @param integer $expectedCount
 * @param mixed   $haystack
 * @param string  $message
 */
function assertNotCount($expectedCount, $haystack, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotCount',
        func_get_args()
    );
}

/**
 * Asserts that a variable is not empty.
 *
 * @param  mixed   $actual
 * @param  string  $message
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertNotEmpty($actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotEmpty',
        func_get_args()
    );
}

/**
 * Asserts that two variables are not equal.
 *
 * @param  mixed   $expected
 * @param  mixed   $actual
 * @param  string  $message
 * @param  float   $delta
 * @param  integer $maxDepth
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 * @since  Method available since Release 2.3.0
 */
function assertNotEquals($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotEquals',
        func_get_args()
    );
}

/**
 * Asserts that a variable is not of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertNotInstanceOf($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotInstanceOf',
        func_get_args()
    );
}

/**
 * Asserts that a variable is not of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertNotInternalType($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotInternalType',
        func_get_args()
    );
}

/**
 * Asserts that a condition is not false.
 *
 * @param  boolean  $condition
 * @param  string   $message
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertNotFalse($condition, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotFalse',
        func_get_args()
    );
}

/**
 * Asserts that a variable is not null.
 *
 * @param  mixed  $actual
 * @param  string $message
 */
function assertNotNull($actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotNull',
        func_get_args()
    );
}

/**
 * Asserts that a string does not match a given regular expression.
 *
 * @param  string $pattern
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 2.1.0
 */
function assertNotRegExp($pattern, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotRegExp',
        func_get_args()
    );
}

/**
 * Asserts that two variables do not have the same type and value.
 * Used on objects, it asserts that two variables do not reference
 * the same object.
 *
 * @param  mixed  $expected
 * @param  mixed  $actual
 * @param  string $message
 */
function assertNotSame($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotSame',
        func_get_args()
    );
}

/**
 * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
 * is not the same.
 *
 * @param array|Countable|Traversable $expected
 * @param array|Countable|Traversable $actual
 * @param string $message
 */
function assertNotSameSize($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotSameSize',
        func_get_args()
    );
}

/**
 * This assertion is the exact opposite of assertTag().
 *
 * Rather than asserting that $matcher results in a match, it asserts that
 * $matcher does not match.
 *
 * @param  array   $matcher
 * @param  string  $actual
 * @param  string  $message
 * @param  boolean $isHtml
 * @since  Method available since Release 3.3.0
 * @author Mike Naberezny <mike@maintainable.com>
 * @author Derek DeVries <derek@maintainable.com>
 */
function assertNotTag($matcher, $actual, $message = '', $isHtml = true)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotTag',
        func_get_args()
    );
}

/**
 * Asserts that a variable is null.
 *
 * @param  mixed  $actual
 * @param  string $message
 */
function assertNull($actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNull',
        func_get_args()
    );
}

/**
 * Asserts that an object has a specified attribute.
 *
 * @param  string $attributeName
 * @param  object $object
 * @param  string $message
 * @since  Method available since Release 3.0.0
 */
function assertObjectHasAttribute($attributeName, $object, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertObjectHasAttribute',
        func_get_args()
    );
}

/**
 * Asserts that an object does not have a specified attribute.
 *
 * @param  string $attributeName
 * @param  object $object
 * @param  string $message
 * @since  Method available since Release 3.0.0
 */
function assertObjectNotHasAttribute($attributeName, $object, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertObjectNotHasAttribute',
        func_get_args()
    );
}

/**
 * Asserts that a string matches a given regular expression.
 *
 * @param  string $pattern
 * @param  string $string
 * @param  string $message
 */
function assertRegExp($pattern, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertRegExp',
        func_get_args()
    );
}

/**
 * Asserts that two variables have the same type and value.
 * Used on objects, it asserts that two variables reference
 * the same object.
 *
 * @param  mixed  $expected
 * @param  mixed  $actual
 * @param  string $message
 */
function assertSame($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertSame',
        func_get_args()
    );
}

/**
 * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
 * is the same.
 *
 * @param array|Countable|Traversable $expected
 * @param array|Countable|Traversable $actual
 * @param string $message
 */
function assertSameSize($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertSameSize',
        func_get_args()
    );
}

/**
 * Assert the presence, absence, or count of elements in a document matching
 * the CSS $selector, regardless of the contents of those elements.
 *
 * The first argument, $selector, is the CSS selector used to match
 * the elements in the $actual document.
 *
 * The second argument, $count, can be either boolean or numeric.
 * When boolean, it asserts for presence of elements matching the selector
 * (true) or absence of elements (false).
 * When numeric, it asserts the count of elements.
 *
 * assertSelectCount("#binder", true, $xml);  // any?
 * assertSelectCount(".binder", 3, $xml); // exactly 3?
 *
 * @param  array   $selector
 * @param  integer $count
 * @param  mixed   $actual
 * @param  string  $message
 * @param  boolean $isHtml
 * @since  Method available since Release 3.3.0
 * @author Mike Naberezny <mike@maintainable.com>
 * @author Derek DeVries <derek@maintainable.com>
 */
function assertSelectCount($selector, $count, $actual, $message = '', $isHtml = true)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertSelectCount',
        func_get_args()
    );
}

/**
 * assertSelectEquals("#binder .name", "Chuck", true,  $xml);  // any?
 * assertSelectEquals("#binder .name", "Chuck", false, $xml);  // none?
 *
 * @param  array   $selector
 * @param  string  $content
 * @param  integer $count
 * @param  mixed   $actual
 * @param  string  $message
 * @param  boolean $isHtml
 * @since  Method available since Release 3.3.0
 * @author Mike Naberezny <mike@maintainable.com>
 * @author Derek DeVries <derek@maintainable.com>
 */
function assertSelectEquals($selector, $content, $count, $actual, $message = '', $isHtml = true)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertSelectEquals',
        func_get_args()
    );
}

/**
 * assertSelectRegExp("#binder .name", "/Mike|Derek/", true, $xml); // any?
 * assertSelectRegExp("#binder .name", "/Mike|Derek/", 3, $xml);// 3?
 *
 * @param  array   $selector
 * @param  string  $pattern
 * @param  integer $count
 * @param  mixed   $actual
 * @param  string  $message
 * @param  boolean $isHtml
 * @since  Method available since Release 3.3.0
 * @author Mike Naberezny <mike@maintainable.com>
 * @author Derek DeVries <derek@maintainable.com>
 */
function assertSelectRegExp($selector, $pattern, $count, $actual, $message = '', $isHtml = true)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertSelectRegExp',
        func_get_args()
    );
}

/**
 * Asserts that a string ends not with a given prefix.
 *
 * @param  string $suffix
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.4.0
 */
function assertStringEndsNotWith($suffix, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringEndsNotWith',
        func_get_args()
    );
}

/**
 * Asserts that a string ends with a given prefix.
 *
 * @param  string $suffix
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.4.0
 */
function assertStringEndsWith($suffix, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringEndsWith',
        func_get_args()
    );
}

/**
 * Asserts that the contents of a string is equal
 * to the contents of a file.
 *
 * @param  string  $expectedFile
 * @param  string  $actualString
 * @param  string  $message
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 * @since  Method available since Release 3.3.0
 */
function assertStringEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringEqualsFile',
        func_get_args()
    );
}

/**
 * Asserts that a string matches a given format string.
 *
 * @param  string $format
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.5.0
 */
function assertStringMatchesFormat($format, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringMatchesFormat',
        func_get_args()
    );
}

/**
 * Asserts that a string matches a given format file.
 *
 * @param  string $formatFile
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.5.0
 */
function assertStringMatchesFormatFile($formatFile, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringMatchesFormatFile',
        func_get_args()
    );
}

/**
 * Asserts that the contents of a string is not equal
 * to the contents of a file.
 *
 * @param  string  $expectedFile
 * @param  string  $actualString
 * @param  string  $message
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 * @since  Method available since Release 3.3.0
 */
function assertStringNotEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringNotEqualsFile',
        func_get_args()
    );
}

/**
 * Asserts that a string does not match a given format string.
 *
 * @param  string $format
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.5.0
 */
function assertStringNotMatchesFormat($format, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringNotMatchesFormat',
        func_get_args()
    );
}

/**
 * Asserts that a string does not match a given format string.
 *
 * @param  string $formatFile
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.5.0
 */
function assertStringNotMatchesFormatFile($formatFile, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringNotMatchesFormatFile',
        func_get_args()
    );
}

/**
 * Asserts that a string starts not with a given prefix.
 *
 * @param  string $prefix
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.4.0
 */
function assertStringStartsNotWith($prefix, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringStartsNotWith',
        func_get_args()
    );
}

/**
 * Asserts that a string starts with a given prefix.
 *
 * @param  string $prefix
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.4.0
 */
function assertStringStartsWith($prefix, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringStartsWith',
        func_get_args()
    );
}

/**
 * Evaluate an HTML or XML string and assert its structure and/or contents.
 *
 * The first argument ($matcher) is an associative array that specifies the
 * match criteria for the assertion:
 *
 *  - `id`   : the node with the given id attribute must match the
 * corresponding value.
 *  - `tag`  : the node type must match the corresponding value.
 *  - `attributes`   : a hash. The node's attributes must match the
 * corresponding values in the hash.
 *  - `content`  : The text content must match the given value.
 *  - `parent`   : a hash. The node's parent must match the
 * corresponding hash.
 *  - `child`: a hash. At least one of the node's immediate children
 * must meet the criteria described by the hash.
 *  - `ancestor` : a hash. At least one of the node's ancestors must
 * meet the criteria described by the hash.
 *  - `descendant`   : a hash. At least one of the node's descendants must
 * meet the criteria described by the hash.
 *  - `children` : a hash, for counting children of a node.
 * Accepts the keys:
 *- `count`: a number which must equal the number of children
 *   that match
 *- `less_than`: the number of matching children must be greater
 *   than this number
 *- `greater_than` : the number of matching children must be less than
 *   this number
 *- `only` : another hash consisting of the keys to use to match
 *   on the children, and only matching children will be
 *   counted
 *
 * <code>
 * // Matcher that asserts that there is an element with an id="my_id".
 * $matcher = array('id' => 'my_id');
 *
 * // Matcher that asserts that there is a "span" tag.
 * $matcher = array('tag' => 'span');
 *
 * // Matcher that asserts that there is a "span" tag with the content
 * // "Hello World".
 * $matcher = array('tag' => 'span', 'content' => 'Hello World');
 *
 * // Matcher that asserts that there is a "span" tag with content matching
 * // the regular expression pattern.
 * $matcher = array('tag' => 'span', 'content' => 'regexp:/Try P(HP|ython)/');
 *
 * // Matcher that asserts that there is a "span" with an "list" class
 * // attribute.
 * $matcher = array(
 *   'tag'=> 'span',
 *   'attributes' => array('class' => 'list')
 * );
 *
 * // Matcher that asserts that there is a "span" inside of a "div".
 * $matcher = array(
 *   'tag'=> 'span',
 *   'parent' => array('tag' => 'div')
 * );
 *
 * // Matcher that asserts that there is a "span" somewhere inside a
 * // "table".
 * $matcher = array(
 *   'tag'  => 'span',
 *   'ancestor' => array('tag' => 'table')
 * );
 *
 * // Matcher that asserts that there is a "span" with at least one "em"
 * // child.
 * $matcher = array(
 *   'tag'   => 'span',
 *   'child' => array('tag' => 'em')
 * );
 *
 * // Matcher that asserts that there is a "span" containing a (possibly
 * // nested) "strong" tag.
 * $matcher = array(
 *   'tag'=> 'span',
 *   'descendant' => array('tag' => 'strong')
 * );
 *
 * // Matcher that asserts that there is a "span" containing 5-10 "em" tags
 * // as immediate children.
 * $matcher = array(
 *   'tag'  => 'span',
 *   'children' => array(
 * 'less_than'=> 11,
 * 'greater_than' => 4,
 * 'only' => array('tag' => 'em')
 *   )
 * );
 *
 * // Matcher that asserts that there is a "div", with an "ul" ancestor and
 * // a "li" parent (with class="enum"), and containing a "span" descendant
 * // that contains an element with id="my_test" and the text "Hello World".
 * $matcher = array(
 *   'tag'=> 'div',
 *   'ancestor'   => array('tag' => 'ul'),
 *   'parent' => array(
 * 'tag'=> 'li',
 * 'attributes' => array('class' => 'enum')
 *   ),
 *   'descendant' => array(
 * 'tag'   => 'span',
 * 'child' => array(
 *   'id'  => 'my_test',
 *   'content' => 'Hello World'
 * )
 *   )
 * );
 *
 * // Use assertTag() to apply a $matcher to a piece of $html.
 * $this->assertTag($matcher, $html);
 *
 * // Use assertTag() to apply a $matcher to a piece of $xml.
 * $this->assertTag($matcher, $xml, '', false);
 * </code>
 *
 * The second argument ($actual) is a string containing either HTML or
 * XML text to be tested.
 *
 * The third argument ($message) is an optional message that will be
 * used if the assertion fails.
 *
 * The fourth argument ($html) is an optional flag specifying whether
 * to load the $actual string into a DOMDocument using the HTML or
 * XML load strategy.  It is true by default, which assumes the HTML
 * load strategy.  In many cases, this will be acceptable for XML as well.
 *
 * @param  array   $matcher
 * @param  string  $actual
 * @param  string  $message
 * @param  boolean $isHtml
 * @since  Method available since Release 3.3.0
 * @author Mike Naberezny <mike@maintainable.com>
 * @author Derek DeVries <derek@maintainable.com>
 */
function assertTag($matcher, $actual, $message = '', $isHtml = true)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertTag',
        func_get_args()
    );
}

/**
 * Evaluates a PHPUnit_Framework_Constraint matcher object.
 *
 * @param  mixed$value
 * @param  PHPUnit_Framework_Constraint $constraint
 * @param  string   $message
 * @since  Method available since Release 3.0.0
 */
function assertThat($value, PHPUnit_Framework_Constraint $constraint, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertThat',
        func_get_args()
    );
}

/**
 * Asserts that a condition is true.
 *
 * @param  boolean $condition
 * @param  string  $message
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertTrue($condition, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertTrue',
        func_get_args()
    );
}

/**
 * Asserts that two XML files are equal.
 *
 * @param  string $expectedFile
 * @param  string $actualFile
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertXmlFileEqualsXmlFile($expectedFile, $actualFile, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertXmlFileEqualsXmlFile',
        func_get_args()
    );
}

/**
 * Asserts that two XML files are not equal.
 *
 * @param  string $expectedFile
 * @param  string $actualFile
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertXmlFileNotEqualsXmlFile($expectedFile, $actualFile, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertXmlFileNotEqualsXmlFile',
        func_get_args()
    );
}

/**
 * Asserts that two XML documents are equal.
 *
 * @param  string $expectedFile
 * @param  string $actualXml
 * @param  string $message
 * @since  Method available since Release 3.3.0
 */
function assertXmlStringEqualsXmlFile($expectedFile, $actualXml, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertXmlStringEqualsXmlFile',
        func_get_args()
    );
}

/**
 * Asserts that two XML documents are equal.
 *
 * @param  string $expectedXml
 * @param  string $actualXml
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertXmlStringEqualsXmlString($expectedXml, $actualXml, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertXmlStringEqualsXmlString',
        func_get_args()
    );
}

/**
 * Asserts that two XML documents are not equal.
 *
 * @param  string $expectedFile
 * @param  string $actualXml
 * @param  string $message
 * @since  Method available since Release 3.3.0
 */
function assertXmlStringNotEqualsXmlFile($expectedFile, $actualXml, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertXmlStringNotEqualsXmlFile',
        func_get_args()
    );
}

/**
 * Asserts that two XML documents are not equal.
 *
 * @param  string $expectedXml
 * @param  string $actualXml
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertXmlStringNotEqualsXmlString',
        func_get_args()
    );
}
