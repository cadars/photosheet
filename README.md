A photo sheet generator.

**Requirements:** PHP

1. Put your images in the `img` folder
2. Open `http://example.com/photosheet.php` in your browser
3. Save as `index.html`

Or from the command-line:

```
php photosheet.php > index.html
```

<details>
  
  <br>
  
  - Caution: it's probably unsafe(?) to host `photosheet.php` on a public server.
  - No thumbnails are generated, so compress your images, max. 2000px height or width.
  - This thing is proposed “as is”, feel free to do whatever you want with it.
  
  You can change these variables in `index.php`:
  
 - Title
 - Description
 - Site image
 
 And the ones for layout in `style.css`:
 
 - Text size and color
 - Background color
 - Margins
 - Maximum thumbnail size

</details>
