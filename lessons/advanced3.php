<h1 class="header">Lesson 3: Atomic group</h1>
<div class="readable">
    <p>Atomic groups are special regex groups that are non-capturing. They are usually used to increase the efficiency of a regular expression, but may also be applied to eliminate certain matches. An atomic group is specified by using (?>pattern): <code>/(?>his|this)/</code></p>

    <p>When the regex engine matches an atomic group, it will discard backtracting positions that came with all tokens inside it. Consider the word ‘smashing’. Using the above regular expression, the regex engine will first try to match the pattern ‘his’ in ‘smashing’. It will not find a match. At this point, the atomic group will kick in. The engine will discard all backtracking positions. This means that it will not search for ‘this’ inside ‘smashing’. Why? If ‘his’ did not return a match, then obviously ‘this’ (which includes ‘his’) will not return positive either.</p>

    <p>The above example did not have many practical uses. We might as well have used <code>/t?his?/</code> instead. Look at the following: <code>/b(engineer|engrave|end)b/</code></p>

    <p>If the regex engine is given the word ‘engineering’, it will correctly match ‘engineer’. The next word boundary, b, will not match. Thus, it will move on to the next match: engrave. It realizes that the ‘eng’ matches, but the rest do not. Finally, ‘end’ is attempted and also failed. If you look carefully, you will realize that once the engine matches ‘engineer’ and fails the last word boundary, it can not possibly match ‘engrave’ or ‘end’. These two matches are smaller words than ‘engineer’, and thus the regex engine should not continue with the other trials.</p>

    <p><code>/b(?>engineer|engrave|end)b/</code></p>

    <p>The above is a much better alternative that will save the regex engine time and improve the code’s efficiency.</p>
</div>