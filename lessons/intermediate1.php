<h1 class="header">Lesson 1: Character Sets</h1>
<div class="readable">
    <p>To define a character set we use brackets ([])</p>
    <p>A character set helps you find anyone of several characters. But one character set only applies to one character. The order of the items in the character set doesn’t matter. You’re basically just saying these are the items that can match.</p>
    <p>Ex. /[aeiou]/  will match any vowel.
    Ex. /f[ea]t/ will match fet and fat but not feat or feet.
    </p>
    <p>It is important to note that if you leave a space in your character set, the regex engine will interpret that as a space so…</p>
    <p>Ex. /[I ]/ will match: I went. Notice that both the I and the space are highlighted. This is because the regex engine interpreted the space as something you’re trying to match.</p>
    <p>A character range allows you to save some space and typing. Instead of typing out /[0123456789]/ I can type /[0-9]/ to get any number 0-9.</p>
    <p>It is important to note that the range character “-” only looks at the two things next to it.</p>
    <p>For example:</p>
    <p>/[10-50]/ Will not match all numbers 10-50 it will match all numbers between 0 and 5 (0-5) or any number 0 or 1.</p>
    <p>We can also negate a character set with the ^ symbol.</p>
    <p>Ex. /[^aeiou]/ matches any consonant.</p>
    <p>It is important to note that the above example will also now match spaces and other non vowel symbols like periods.</p>
    <p>For example:</p>
    <p>/[10-50]/ Will not match all numbers 10-50 it will match all numbers between 0 and 5 (0-5) or any number 0 or 1.</p>
    <p>We can also negate a character set with the ^ symbol.</p>
    <p>Ex. /[^aeiou]/ matches any consonant.</p>
    <p>For this reason there are many shorthand character sets that are available.</p>

    <table>
        <tr>
            <th>Shorthand</th>
            <th>Description</th>
        </tr>
    </table>
</div>