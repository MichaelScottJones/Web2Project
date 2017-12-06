<h1 class="header">Lesson 2: Repetition Metacharacters</h1>
<div class="readable">
    <p>There are certain characters in regular expressions that help us match repeated sequences of characters. These characters are called repetition metacharacters.</p>
    <p>These characters are:   <code>*, +, ?</code></p>
    <p>
        <code>A *</code> means the preceding item 0 or more times<br/>
        <code>A +</code> means the preceding item 1 or more times<br/>
        <code>A ?</code> means the preceding item 0 or 1 time
    </p>
    <p>With <code>a *</code> or <code>a ?</code> the item doesn’t have to exist at all.</p>
    <p>
        <code>pears*</code> matches pear, pears, or pearssssssss<br/>
        <code>pears+</code> matches pears or pearsssssssssss<br/>
        <code>pears?</code> Matches pear or pears
    </p>
</div>