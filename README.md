Requirements: PHP

1. Put your images in the `img` folder
2. Open `http://example.com/photosheet.php` in your browser
3. Save as `index.html` or else

Or from the command-line:

```
php photosheet.php > index.html
```

<details>
  
  <br>
  
  - Images should be a reasonable size and compressed beforehand, as no thumbnails are generated
  - `figure.landscape` and `figure.portrait` are available for styling
  - Navigate within the lightbox on tap/click, swipe/scroll, on focus with <kbd>Tab</kbd>, or with the <kbd>&larr;</kbd> <kbd>&rarr;</kbd> keys

  Default variables in `photosheet.php`:
  ```php
  $site_title = "Photographs of Roadside America";
  $site_desc = "by John Margolies";
  $site_style = "style.css";
  $img_folder = "img/john-margolies";
  $allowed_types = ["gif","jpg","jpeg","png","webp"];
  ```
 Default variables in `style.css`:
  ```css
  --textsize: 16px;
  --textcolor: #eee;
  --backcolor: #0e0e0f;
  --margin: calc(0.8em + 1vw);
  --thumbsize: 156px;
  --slide-transition: auto;
  ```
Please check v0.1 for a simpler javascript-free version.\
The CSS images slideshow alone is [available here](https://codepen.io/cadars/pen/PoJGMNP).
  
</details>
