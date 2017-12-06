<h1 class="header">Lesson 2: Literal Characters</h1>
<div class="readable">
    <p>The most basic regular expression consists of a single literal character, such as a. It matches the first occurrence of that character in the string. If the string is Jack is a boy, it matches the a after the J. The fact that this a is in the middle of the word does not matter to the regex engine. If it matters to you, you will need to tell that to the regex engine by using word boundaries. We will get to that later.</p>

    <p>This regex can match the second a too. It only does so when you tell the regex engine to start searching through the string after the first match. In a text editor, you can do so by using its "Find Next" or "Search Forward" function. In a programming language, there is usually a separate function that you can call to continue searching through the string after the previous match.</p>

    <p>Similarly, the regex cat matches cat in About cats and dogs. This regular expression consists of a series of three literal characters. This is like saying to the regex engine: find a c, immediately followed by an a, immediately followed by a t.</p>
    
    <p>Note that regex engines are case sensitive by default. cat does not match Cat, unless you tell the regex engine to ignore differences in case.</p>
</div>