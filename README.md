A photo sheet generator.

**Requirements:** PHP

1. Put your images in the `img` folder
2. Open `http://example.com/photosheet.php` in your browser
3. Save as `index.html` or else

Or from the command-line:

```
php photosheet.php > index.html
```

<details>
  
  <br>

  Default variables in `photosheet.php`:
  ```
  $site_title = "Photographs of Roadside America";
  $site_desc = "by John Margolies";
  $site_style = 'style.css';
  $img_folder = './img';
  $allowed_types = array('png','jpg','jpeg','gif');
  ```
 Default variables in `style.css`:
  ```
  --textsize: 16px;
  --textcolor: #eee;
  --bgcolor: #0e0e0f;
  --margin: 2vmax;
  --thumbsize: 165px;
  ```
  - Caution: it's probably unsafe(?) to host `photosheet.php` on a public server.
  - No thumbnails are generated, so compress your images beforehand.
</details>
