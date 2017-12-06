<h1 class="header">Lesson 1: What is regex?</h1>
<div class="readable">
    <p>First, a regex is a text string. For instance, foo is a regex. So is <code>[A-Z]+:\d+</code>.</p>

    <p>Those text strings describe patterns to find text or positions within a body of text. For instance, the regex foo matches the string foo, the regex <code>[A-Z]+:\d+</code> matches string fragments like F:1 and GO:30, and the regex <code>(?<=[a-z])(?=[A-Z])</code> matches the position in the string CamelCase where we shift from a lower-case letter to an upper-case letter. The concept was first developed by Stephen Cole Kleene.</p>

    <p>Typically, these patterns (which can be beautifully intricate and precise) are used for four main tasks: to find text within a larger body of text; to validate that a string conforms to a desired format; to replace text (or insert text at matched positions, which is the same process); and to split strings.</p>

    <p>For instance, the CamelCase pattern from the last paragraph can be used to split MyLovelyValentine into its three component words. And you could use the regex <code>_\d+_</code> to find digits within underscores (as in <code>_12_</code>) and to replace the underscores with double dashes, yielding <code>--12--</code>, something you could not do with a conventional search-and-replace</p>

    <p>Who does this work of finding, replacing, splitting? A regex engine. For instance, you can find regex engines in text editors such as Notepad++ and EditPad Pro. You also find regex engines ready to roar in most programming languages—such as C#, Python, Perl, PHP, Java, JavaScript and Ruby.</p>

    <p>Let's compress the definition from the earlier paragraphs:</p>
    
    <p>A regex is a text string that describes a pattern that a regex engine uses in order to find text (or positions) in a body of text, typically for the purposes of validating, finding, replacing or splitting.</p>
</div>