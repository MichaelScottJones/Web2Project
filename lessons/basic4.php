<h1 class="header">Lesson 4: Special Characters</h1>
<div class="readable">
    <p>If you are a programmer, you may be surprised that characters like the single quote and double quote are not special characters. That is correct. When using a regular expression or grep tool like PowerGREP or the search function of a text editor like EditPad Pro, you should not escape or repeat the quote characters like you do in a programming language.</p>

    <p>In your source code, you have to keep in mind which characters get special treatment inside strings by your programming language. That is because those characters are processed by the compiler, before the regex library sees the string. So the regex <code>1\+1=2</code> must be written as <code>"1\\+1=2"</code> in C++ code. The C++ compiler turns the escaped backslash in the source code into a single backslash in the string that is passed on to the regex library. To match <code>c:\temp</code>, you need to use the regex <code>c:\\temp</code>. As a string in C++ source code, this regex becomes <code>"c:\\\\temp"</code>. Four backslashes to match a single one indeed.
    </p>
</div>