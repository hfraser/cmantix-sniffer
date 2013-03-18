# C-Mantix Checkstyle
The C-Mantix checkstyle is a [CodeSniffer](http://www.squizlabs.com/php-codesniffer) [standard](http://pear.php.net/manual/en/package.php.php-codesniffer.coding-standard-tutorial.php) it is used in order to standardize and validate all code that I manage. Any contributions on project that I manage are expected to follow this standard in order to be considered for integration.

## Documentation
 * [The Coding Standard](#coding-standard)
 * [How to use CodeSniffer](http://pear.php.net/manual/en/package.php.php-codesniffer.usage.php)
 * [Implementing CodeSniffer to Eclipse](http://www.phpsrc.org/projects/pti-php-codesniffer/wiki/)
 * [Implementing CodeSniffer to NetBean](http://www.amaxus.com/cms-blog/coding-standards-netbeans-php-codesniffer)

# Coding Standard
The C-Mantix coding standard as been established to provide unify coding standards throughout the project. This permits that all code is written in the same style and that everything is easily understandable at first view by everyone involved. Thus eliminating confusions when working in teams.

## File encoding
All files that contain text without exceptions whether they be php, xml, xsl, Javascript or plain text must be encoded in UTF-8.

## Indentation
All Code indentations need to be done using tabulation 'tab'.
All PhpDoc content need to be indented using spaces.

## Maximum line lenght
A maximum line lenght of 100 characters is supported, remember that each tabs are worth 4 characters.

## PHP Demarcation
In files containing only PHP code only the opening bracket is entered.
Short format PHP declarations are not accepted.

```php
<?php
// your code
```

For code demarcation where PHP is declared with an other structure (ex:HTML) the declaration is done in it's full form.

```php
<!-- html here -->
<?php
// php code
?>
<!-- html here -->
```

## Strings
### String Literals
String literals should always be declared using single quotes

```php
$myVar = 'String Content!';
```

### String Literals with Single Quotes 
String literals that contain single quotes are declared using double quotes
 
```php
<?php
$myVar = "Hans's String Content!";
```

### Variable Substitution in Strings
Variable substitution is only accepted in the following form or by using proper concatenation.

```php
<?php
$myVar = "Welcome {$name} to C-Mantix!";
```

The Following forms are not permitted
```php
<?php
$myVar = "Welcome $name to C-Mantix!";
$myVar = "Welcome ${name} to C-Mantix!";
```

### String concatenations
Spaces must be present before and after the concatenation operator "."

```php
<?php
$myVar = 'Welcome ' . $name . ' to C-Mantix!';
```

## Arrays
Array declaration must be implicit on variables when the variable is to be populated.

```php
<?php
$myVar = array();
```

### Numerical Arrays
Numericaly indexed arrays are declared inline.

```php
<?php
$myVar = array(1,2,3,4);
$myVar = array('dog','cat','bird');
```

Alternatively if an array is to long for the line length it can be declared on multiple lines
```php
<?php
$myVar = array(
	'Alternatively', 'if', 'an', 'array', 'is', 
	'to', 'long', 'for', 'the', 'line', 'length', 
	'it', 'can', 'be', 'declared', 'on', 'multiple', 
	'lines'
);
```

The following Form is not accepted
```php
<?php
$myVar = array('Alternatively', 'if', 'an', 'array', 'is', 
	'to', 'long', 'for', 'the', 'line', 'length', 
	'it', 'can', 'be', 'declared', 'on', 'multiple', 
	'lines');
```

### Associative Arrays
Associative arrays are declared on multiple lines like so.

```php
<?php
$myVar = array(
	'key' => 'Value',
	'key' => 'Value',
	'key' => 'Value'
);
```

> NOTE : All Multiple line declarations of arrays need proper indentation as demonstrated in the example above.

## Namespace Declarations
All Namespace declarations need to be on the first line after the PHP declaration.

```php
<?php
namespace cmantix\Core;
use Bob\Module\Files;
```

## Assignment operators
All assignment operators must be preceded and followed by a space :

```php
<?php
$myVar = 1;
$myVar .= 'string';
$myVar = 1 + 2;
```

## Variable Names
Variables are named according to their scopes this makes understanding the meaning of a variable much faster when working with unknown code.

### Global Variables
All Global Variables must start with a "g"

```php
<?php
$gVar = 'value';
```

### Constants
All Constants need to be in ALL CAPS.

```php
<?php
define('A_CONSTANT_NAME', 'value');
const CONSTANTS_ARE_ALL_CAPS = 'value';
```

## Classes
Only one class per PHP file is permitted
The name of the file the class is in must be the exact same as the class name
All classes must be named using camelCase.
All class names must start with an Uppercase letter.
Class brackets need to be on the line following the function declaration.

When extending a class it is desired to declare the dependencies on the same line as the class declaration. If it is not possible to put the full declaration on the same line you should declare it in multiple lines. 

The Following Class declarations are acceptable

```php
<?php
class ClassName
{
	// Class code here
}

class VeryLongClassNameThatIsExtended 
	extends AnOtherVeryLongClassNameThatIsExtending 
	implements ASuperNastyVeryLongInterfaceName
{
	// Class code here
}
```

### Class Properties
All Class Properties start with "p" unless they are protected or private in which case the start with an underscore "_".
```php
<?php
class NewClass
{
	var $pClassProperty;
	protected $_theProtectedProp;
	private $_thePrivateProp;
}
```

## Functions and methods
All function names need to be camelCase.
Class methods must declare their visibility.
Private and Protected methods names should start with an underscore "_"
Function brackets need to be on the line following the function declaration.
Function attributes must use type hinting when ever possible, built in types cannot be declared in php. Built in types include : Booleans, Integers, Floating point numbers, Strings

The following are accepted forms of function declarations :

### Global function

```php
<?php
funtion someGlobalFunction(DOMNode $aNode)
{
	// do something
}
```

### Class methods

```php
<?php
class TheClass
{
	public function somePublicMethod($aParam)
	{
		// do something
	}

	private function _somePrivateFunction(array $aArrayParam)
}
```

In case The parameters of a function exceed the maximum line length the parameters have to me indented to the line bellow.

### Local Function variables
Function attributes always start with "a".
Locally declared function variables always start with "my", unless they are used for iterator counts or initiated inside loops.

```php
<?php
function sayWelcome($aName)
{
	$myLocalVar = "Welcome {$aName} to C-Mantix!";
	for ($i = 0; $i < 1; $i++) {
		// do something
	}
}
```

## Conditional statements and loops
Conditional statements if , elseif, else are to be followed by a space before the opening parenthesis.
A space must be present after the last parenthesis and the opening bracket.
When a statement is to long to fit in the maximum line space it may be indented with each parts in a representative way.
Conditional operators like ==, !=, ===, &&, || and others must be preceded and followed by a space.

### Conditional statements

```php
<?php
if ($myValue == 1) {
	// do Something
} else {
	// do something else
}

switch ($myValue){
	case ('value') :
		// do something
	break;

	default:
		// dome something else
	break;
}
```

### Loops

```php
<?php
for ($i = 0; $i < 1; $i++) {
	// do something
}

while ($myResult->fetch()) {
	// do something
}

foreach ($myArray as $key=>$value) {
	echo($key . ' = ' . $value);
}
```

> Inline conditional statements in loops are not accepted.

```php
<?php
for ($i = 0; $i < 1; $i++) echo($i);
while ($myResult < 10) echo($myResult);
foreach ($myArray as $key=>$value) echo($key . ' = ' . $value);
}}}

### Ternary conditional operator
The conditional part of any ternary conditional operators must be contained into parenthesis for clarity.
The following examples are good :

```php
<?php
$myVar = ($myCondition == 1) ? true : false;
$myVar = ($myVar) ?: false;
```

## Documentation Format.
All Documentation Must be compatible with PhpDocumentor (http://www.phpdoc.org/).
The following items need to be documented.

### Constants and Variables
All global variables, constants and class properties need to be documented.

#### Global variables
The description @var and @global elements are mandatory.
There must be a space between the description and the @var element.

```php
<?php
/**
 * Variable description
 *
 * @var string
 * @global
 */
$gStringVariable
```

#### Class Properties
Class properties are the same as a global variable but without the _@global_ element.

```php
<?php
/**
 * Variable description
 *
 * @var string
 */
private $_theVar;
```


### Functions
All Functions must have a properly documented docblock
The following form is the accepted format.
The order of the elements must be the same.
The long description is optional.
Every Parameters need to have proper @param element with type definition and and description.
The _@param_ block need to have a constant indentation based on the longest string items like bellow.
Their needs to be a blank line before and after the @param block
The @return with proper is mandatory.
The @throws element is mandatory if the function throws an exception.

Any other tags you need to add have to be after the @param block.
In case you need to use the @deprecated tag it needs to be the last element after the @return tag.  

```php
<?php
/**
 * Short Description
 * 
 * Long description
 *
 * @param string  &$aStringParam description of $aStringParam
 * @param array   $aArrayParam   description of $aArrayParam
 * @param DOMNode $aNode         description of $aNode
 *
 * @throws SomeException
 * @return return_type
 */
public function someFunction(&$aStringParam, array $aArrayParam, DOMNode $aNode)
{
	// do something
}
```

### Classes
All class need to have a full docblock as defined bellow.
Short description is Required
Long Description is Optional
 @version required
 @author required
 @copyright optional
 @license optional
 @category required
 @package required
 @subpackage  optional
 @example optional multiple @example element can be used
 @link optional multiple @link element can be used
 @see optional multiple @see element can be used
 @since optional
 @filesource required 
 @deprecated optional

Any other tags need to go after the @deprecated position.

```php
<?php
/**
 * Short description
 *
 * Long Description
 *
 * @version    Release: 1.0
 * @author     Hans-Frederic Fraser <hfraser@c-mantix.com>
 * @copyright  2010 Hans-Frederic Fraser
 * @license    http://www.gnu.org/licenses/gpl-3.0-standalone.html gpl-3.0
 * @category   Database/Adapters
 * @package    Core
 * @subpackage Basics
 * @filesource
 */
```

The @package and @subpackage need to represent the namespace of the current class.
In this case the package represents the first part of the path the subpackage represents the rest:

```php
<?php
namespace cmantix/Core/Database/Adapters;
```

### Ad-Hoc PHP files
All Ad-hoc php files need to have the same docblock as a class if they do not contain a class.

> __This is an ensemble of sniffs a special thanks to those who wrote some of these sniffs that I picked up along the way:__
> * Greg Sherwood <gsherwood@squiz.net>
> * Marc McIntyre <mmcintyre@squiz.net>
> * Wim Godden <wim.godden@cu.be>
> * Stefano Kowalke <blueduck@gmx.net> 

> Copyright (c) 2012 Hans-Frederic Fraser
> Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
>
> The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
>
> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
