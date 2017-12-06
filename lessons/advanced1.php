<h1 class="header">Lesson 1: Back Referencing</h1>
<div class="readable">
    <p>When matching string patterns using regular expressions, you might wish to match the same piece of text more than once. When the pattern used to perform the first match includes non-literal elements, you can look for the repeated text using a backreference. A backreference in a regular expression identifies a previously matched group and looks for exactly the same text again.</p>

    <p>A simple example of the use of backreferences is when you wish to look for adjacent, repeated words in some text. The first part of the match could use a pattern that extracts a single word. The next part would be a backreference that refers to the captured group. We'll create such an example in this article.</p>

    <p>A numbered backreference matches text already found in a group. You simply add a backslash character and the number of the group to match again. For example, to find the text matched by the first group in a regular expression, you would include, "\1" in your regular expression pattern. The text extracted into the captured group is then searched for in the input string at the position of the backreference.</p>

    <p>Let's try an example program. Create a new console application and add the following code to the Main method:</p>

    <p><code>string input = "An easy mistake to make when writing multiline text is "
             + "is typing the same word twice, once at the start of a "
             + "a line and again at the end. This duplication can't "
             + "can't always be easily spotted.";
 
            string pattern = @"(\b\S+)\s+\1\b";
             
            foreach (Match match in Regex.Matches(input, pattern))
            {
                Console.WriteLine("Duplication of '{0}' at index {1}.", match.Groups[1], match.Index);
            }
             
            /* OUTPUT
              
            Duplication of 'is' at index 52.
            Duplication of 'a' at index 107.
            Duplication of 'can't' at index 155.
              
            */
        </code>
    </p>
    <p>Consider the regular expression that is held in the pattern variable. The first group, <code>(\b\S+)</code>, looks for a word boundary anchor, followed by a number of non-whitespace characters. When combined with the following, <code>\s</code>, this finds whole words that are followed by a white space character. The pattern will find non-word characters, which means that symbols are included too.</p>

    <p>The next part of the pattern is a backreference to the first group, followed by a word boundary. The backreference will match the text captured from the first group, so the full pattern identifies duplicate, adjacent words.</p>

    <p>NB: The syntax for backreferences is similar to that of octal literal characters. The regular expression engine assumes a backreference if the backslash is followed by a single numeric digit. For longer numbers, a backreference is used if there are enough capturing groups. If there are not, a literal is matched.</p>

    <p>One way to avoid the ambiguity of numbered backreferences is to use named backreferences. These allow you to match the text that has been captured by a named group. If the same name has been used twice or more, the backreference will match the text from the most recent match. To define a named backreference, use <code>\k</code>, followed by the name of the group.</p>

    <p>The code below performs the same function as the previous example. This time the first word is captured in a group named, "repeated". The backreference uses this name to find the duplicated words.</p>

    <p><code>string input = "An easy mistake to make when writing multiline text is "
             + "is typing the same word twice, once at the start of a "
             + "a line and again at the end. This duplication can't "
             + "can't always be easily spotted.";
 
            string pattern = @"(?&lt;repeated&gt;\b\S+)\s+\k&gt;repeated&lt;\b";
             
            foreach (Match match in Regex.Matches(input, pattern))
            {
                Console.WriteLine("Duplication of '{0}' at index {1}.", match.Groups[1], match.Index);
            }
             
            /* OUTPUT
              
            Duplication of 'is' at index 52.
            Duplication of 'a' at index 107.
            Duplication of 'can't' at index 155.
              
            *
        </code>
    </p>
</div>