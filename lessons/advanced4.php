<h1 class="header">Lesson 4. Recursion</h1>
<div class="readable">
    <p>Recursion in regular expressions can be used to match nested constructs, such as parentheses, (this (that)), and HTML tags, <code>&lt;div&gt;&lt;/div&gt;</code>. They require the use of <code>(?R)</code>, an operator that matches recursive sub-patterns. Consider the regular expression that matches nested parentheses:</p>

    <p><code>/(((?>[^()]+)|(?R))*)/</code></p>

    <p>The outermost parentheses in this regular expression match the beginning of the nested constructs. Then comes an optional operator, which can either match non-parenthetical characters (?>[^()]+) or the whole expression again in a sub-pattern, (?R). Notice that this operator is repeated as many times as possible to match all nested parentheses.</p>

    <p>Another example of recursion at work is the following:</p>

    <p><code>/<([w]+).*?>((?>[^&lt;&gt;]+)|((?R)))*/</code></p>

    <p>The above expression combines character groups, greedy operators, back-tracking, and atomic groups to match nested tags. The first parenthesized group <code>([w]+)</code> matches the tag name for use later in the regular expression. It then proceeds to match the rest of the tag. The next parenthesized sub-expression is very similar to the one above. It either matches non-tag <code>(?>[^&lt;&gt;]+)</code> characters or recurses over another tag <code>(?R)</code>. Finally, the last part of the expression matches the close tag.</p>
</div>