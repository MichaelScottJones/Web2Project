<h1 class="header">Lesson 6: Commenting</h1>
<div class="readable">
    <p>Commenting is not a way to actually match strings, but it is one of the most important parts of regular expressions. As you dive deep into larger, more complex expressions, it becomes hard to decipher what is actually being matched. Using comments in the middle of regular expressions is the perfect way to minimize such confusion.</p>

    <p>To place a comment inside a regular expression, use the <code>(?#comment)</code>format. Replace “comment” with the word(s) of your choice:</p>

    <p><code>/(?#digit)d/</code></p>

    <p>It is especially important to comment regular expressions that you release to the public. Users of your regex will be able to easily understand and modify the pattern to meet their needs. It can even go so far as to help you decode it when revisiting a program.</p>

    <p>Consider using the “x” or (?x) modifier for free-spacing mode with comments. This causes a regular expression to ignore white space between tokens. All spaces can still be represented with [ ] or (a backslash and a space):</p>

    <p><code>
        /
        d   #digit
        [ ]   #space
        w+   #word
        /x
    </code></p>

    <p>The above is the same as:</p>

    <p><code>/d(?#digit)[ ](?#space)w+(?#word)/</code></p>

    <p>Always create well-documented code.</p>
</div>