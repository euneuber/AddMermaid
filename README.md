# AddMermaid

Add mermaid.js rendering for kanboard markdown texts - requires markdownplus

See [mermaid.js](https://mermaid-js.github.io/mermaid/#/) for available diagram types and their syntax. 

## Author

- Eugen Neuber
- License MIT

## Requirements

Kanboard >= v1.0.48  
Kanboard installed at a web server.
You can find the download at [kanboard.org](https://kanboard.org/)
Plugin [MarkdownPlus](https://github.com/creecros/MarkdownPlus)

## Installation

Install this plugin by cloning this repository into kanboard plugin directory:

```console
cd $YOUR_KANBOARD_DOCUMENT_ROOT
 
git clone https://github.com/euneuber/AddMermaid.git plugins/AddMermaid
```

Note: Plugin folder is case-sensitive.

### :star: If you like it, do not forget to give a star on GitHub!

## Bug Reporting Issues

Please [create an issue](https://github.com/euneuber/AddMermaid/issues) for any bugs you've found.

## Example

Add this snippet to your markdown text:

```html
<div class="mermaid">
sequenceDiagram
    Alice->>John: Hello John, how are you?
    John-->>Alice: Great!
    Alice-)John: See you later!
</div>
```
