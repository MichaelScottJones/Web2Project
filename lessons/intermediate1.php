<h1 class="header">Lesson 1: Character Sets</h1>
<div class="readable">
    <p>To define a character set we use brackets <code>([])</code></p>
    <p>A character set helps you find anyone of several characters. But one character set only applies to one character. The order of the items in the character set doesn’t matter. You’re basically just saying these are the items that can match.</p>
    <p>Ex. <code>/[aeiou]/</code>  will match any vowel.
    Ex. <code>/f[ea]t/</code> will match fet and fat but not feat or feet.
    </p>
    <p>It is important to note that if you leave a space in your character set, the regex engine will interpret that as a space so…</p>
    <p>Ex. <code>/[I ]/</code> will match: I went. Notice that both the I and the space are highlighted. This is because the regex engine interpreted the space as something you’re trying to match.</p>
    <p>A character range allows you to save some space and typing. Instead of typing out <code>/[0123456789]/</code> I can type <code>/[0-9]/</code> to get any number 0-9.</p>
    <p>It is important to note that the range character “-” only looks at the two things next to it.</p>
    <p>For example:</p>
    <p><code>/[10-50]/</code> Will not match all numbers 10-50 it will match all numbers between 0 and 5 (0-5) or any number 0 or 1.</p>
    <p>We can also negate a character set with the <code>^</code> symbol.</p>
    <p>Ex. <code>/[^aeiou]/</code> matches any consonant.</p>
    <p>It is important to note that the above example will also now match spaces and other non vowel symbols like periods.</p>
    <p>For example:</p>
    <p><code>/[10-50]/</code> Will not match all numbers 10-50 it will match all numbers between 0 and 5 (0-5) or any number 0 or 1.</p>
    <p>We can also negate a character set with the <code>^</code> symbol.</p>
    <p>Ex. <code>/[^aeiou]/</code> matches any consonant.</p>
    <p>For this reason there are many shorthand character sets that are available.</p>


    <code><div id="shorthand"></div></code>
    <script src="extrafunctions" type="text/javascript"></script>
    <script type="text/javascript">
        var shorthand = {
              "Shorthand": [
                "/d",
                "/w",
                "/s",
                "/D",
                "/W",
                "/S"
              ],
              
              "Description": [
                "Digit",
                "Word Character",
                "Whitespace",
                "Not Digit",
                "Not Word Character",
                "Not Whitespace"
              ]
        };


        document.querySelector("#shorthand").appendChild(makeTbl(shorthand));


    </script>


    <p>These Shorthand Character sets are pretty widely supported</p>
    <p>There are also POSIX Bracket Expressions</p>
    <code><div id="POSIX"></div></code>

    <script type="text/javascript">
        var shorthand = {
              "Expression": [
                "[:alnum:]",
                "[:alpha:]",
                "[:ascii:]",
                "[:blank:]",
                "[:cntrl:]",
                "[:digit:]",
                "[:graph:]",
                "[:lower:]",
                "[:print:]",
                "[:punct:]",
                "[:space:]",
                "[:upper:]",
                "[:word:]",
                "[:xdigit:]"
              ],
              
              "Description": [
                "[a-zA-Z0-9] Alphanumeric characters",
                "[a-zA-Z] Alphabetic characters",
                "[\\x00-\\x7F] ASCII characters",
                "[ \\t] Space and tab",
                "[\\x00-\\x1F\\x7F] Control characters",
                "[0-9] Digits",
                "[\\x21-\\x7E] Anything except spaces and control characters",
                "[a-z] Lowercase Letters",
                "[\\x20-\\x7E] Anything except control characters",
                "[!”\\#$%&’()*+,\\-./:;<=>?@\\{\\\\\\]^_`{|}~] Punctuation, Symbols",
                "[ \\t\\r\\n\\v\\f] All whitespace characters including line breaks",
                "[A-Z] Uppercase Letters",
                "[A-Za-z0-9_] Letters, numbers, and underscores",
                "[A-Fa-f0-9] Hexadecimal Digits"
              ]
        };
    </script>

    <p>Most metacharacters inside character sets are already escaped with the exception of:   <code>] - ^ \</code></p>

</div>