<h1 class="header">Lesson 5: Wildcard</h1>
<div class="readable">
    <p>In some card games, the Joker is a wildcard and can represent any card in the deck. With regular expressions, you are often matching pieces of text that you don't know the exact contents of, other than the fact that they share a common pattern or structure (eg. phone numbers or zip codes).</p>
    <p>Similarly, there is the concept of a wildcard, which is represented by the . (dot) metacharacter, and can match any single character (letter, digit, whitespace, everything). You may notice that this actually overrides the matching of the period character, so in order to specifically match a period, you need to escape the dot by using a slash \.accordingly.</p>
    <p>Wildcards</p>
    <p>. (dot)</p>
    <p>will match any single character, equivalent to ? (question mark) in standard wildcard expressions. Thus, "m.a" matches "mpa" and "mea" but not "ma" or "mppa".</p>
</div>