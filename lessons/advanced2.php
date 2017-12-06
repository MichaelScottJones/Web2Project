<h1 class="header">Lesson 2: Word Boundaries</h1>
<div class="readable">
    <p>Word boundaries are places in a string that come between a word character and a non-word character. The specialty of these boundaries is the fact that they don’t actually match a character. Their length is zero. The b regular expression matches any word boundary.</p>

    <p>Unfortunately, boundaries are so often skimmed over that many do not recognize their real significance. For example, let’s say you want to match the word “import”: <code>/import/</code> </p>

    <p>Watch out! Regular expressions can be tricky. The above expression will also match: <code>important</code></p>

    <p>You may think it is as simple as adding a space before and after import to prevent these bogus matches: <code>/ import /</code></p>

    <p>But what about this case?: <code>The trader voted for the import</code></p>

    <p>When import is at the beginning or the end of a string, the modified regex will fail. Thus, splitting this up into cases is required: <code>/(^import | import | import$)/i</code></p>

    <p>Looking back at our regular expression, it does not take periods or other punctuation into account. Just to match this single word, a regular expressions may look like this: <code>/(^import(:|;|,)? | import(:|;|,)? | import(.|?|!)?$)/i</code></p>

    <p>That’s a lot of code to match just a single word. This is why word boundaries are so significant. To accomplish the above statement and many other variations with word boundaries, all that is necessary is: <code>/bimportb/</code></p>

    <p>This will match every case above and more. b‘s flexibility comes from the fact that it matches a zero-length string. All it matches is an imaginary space between two characters. It checks if one of the characters is a non-word character and the other is a word character. If so, it matches it. If the beginning or end of a string is encountered, b treats it as a non-word character. Because the i in import is still considered a word character, it will match import.</p>

    <p>Note that the opposite of b is B. This operator will match the space in-between two word or two non-word characters. Thus, if you would like to match ‘hi’ inside another word, you could use: <code>BhiB</code></p>
</div>