<h1 class="header">Lesson 3: Metacharacters</h1>
<div class="readable">
    <p>Because we want to do more than simply search for literal pieces of text, we need to reserve certain characters for special use. In the regex flavors discussed in this tutorial, there are 12 characters with special meanings: the backslash <code>\</code>, the caret <code>^</code>, the dollar sign <code>$</code>, the period or dot <code>.</code>, the vertical bar or pipe symbol <code>|</code>, the question mark <code>?</code>, the asterisk or star <code>*</code>, the plus sign <code>+</code>, the opening parenthesis <code>(</code>, the closing parenthesis <code>)</code>, the opening square bracket <code>[</code>, and the opening curly brace <code>{</code>, These special characters are often called "metacharacters". Most of them are errors when used alone.</p>

    <p>If you want to use any of these characters as a literal in a regex, you need to escape them with a backslash. If you want to match 1+1=2, the correct regex is <code>1\+1=2</code>. Otherwise, the plus sign has a special meaning.</p>

    <p>Note that 1+1=2, with the backslash omitted, is a valid regex. So you won't get an error message. But it doesn't match 1+1=2. It would match 111=2 in 123+111=234, due to the special meaning of the plus character.</p>

    <p>If you forget to escape a special character where its use is not allowed, such as in +1, then you will get an error message.</p>

    <p>Most regular expression flavors treat the brace <code>{</code> as a literal character, unless it is part of a repetition operator like a{1,3}. So you generally do not need to escape it with a backslash, though you can do so if you want. An exception to this rule is the Java, which requires all literal braces to be escaped.</p>

    <p>All other characters should not be escaped with a backslash. That is because the backslash is also a special character. The backslash in combination with a literal character can create a regex token with a special meaning. E.g. <code>\d</code> is a shorthand that matches a single digit from 0 to 9.</p>

    <p>Escaping a single metacharacter with a backslash works in all regular expression flavors. Some flavors also support the <code>\Q…\E</code> escape sequence. All the characters between the <code>\Q</code> and the <code>\E</code> are interpreted as literal characters. E.g. <code>\Q*\d+*\E</code> matches the literal text <code>*\d+*</code>. The <code>\E</code> may be omitted at the end of the regex, so <code>\Q*\d+*</code> is the same as <code>\Q*\d+*\E</code>. This syntax is supported by the JGsoft engine, Perl, PCRE, PHP, Delphi, Java, both inside and outside character classes. Java 4 and 5 have bugs that cause <code>\Q…\E</code> to misbehave, however, so you shouldn't use this syntax with Java. Boost supports it outside character classes, but not inside.</p>
</div>