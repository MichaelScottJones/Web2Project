<h1 class="header">Lesson 5: Callbacks</h1>
<div class="readable">
    <p>Certain matches in a pattern may require special modifications. In order to apply multiple or complex changes, callbacks can be used. A callback is used for dynamic substitution Strings in the <code>preg_replace_callback</code> function. They take in a function as a parameter to use when a match is found. This function receives the match array as a parameter and returns a modified string that is used as a replacement.</p>

    <p>As an example, consider a regular expression that changes all words to uppercase in a given string. Unfortunately, PHP does not have a regex operator that changes a character to a different case. To accomplish this task, a callback may be used. First, the expression must match all letters that need to be capitalized:</p>

    <p><code>/bw/</code></p>

    <p>The above uses both word boundaries and character classes to work. Now that we have this expression, we can write a callback function:</p>

    <p><code>function upper_case( $matches ) {
                return strtoupper( $matches[0] );
            }
        </code>
    </p>

    <p>upper_case takes in an array of matches and returns the whole matched pattern in uppercase. $matches[0], in this case, represents the letter that needs to be capitalized. All of this can now be put together using the preg_replace_callback function:</p>

    <p><code>preg_replace_callback( '/bw/', "upper_case", $str );</code></p>

    <p>That is the power of a simple callback.</p>
</div>