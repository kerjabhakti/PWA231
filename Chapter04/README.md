## Belajar CSS (Cascading Style Sheet) Dasar
Yang akan dipelajari terdiri dari :
1. CSS Font Family, Padding, Margin
2. Design Table dengan CSS, Properti Overflow CSS
3. Display CSS : Inline, Block, None dan selengkapnya
4. CSS Gradient, Grid (Mengatur layout), CSS Selector
5. CSS Border (Property Style, color, width, dll)
6. CSS Position, Box Shadow, Animation, Background Image
7. Latihan Tutorial Dasar untuk Pemula

``` html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Padding dan table</title>
    <style>
      table {
        background-color: #04aa6d;
        color: white;
      }
      td {
        padding: 8px;
      }
      tr {
        border-bottom: 1px solid #ddd;
      }
      tr:hover {
        background-color: #f5f5f5;
      }
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <td>Kolom 1, Baris 1</td>
        <td>Kolom 2, Baris 1</td>
      </tr>
      <tr>
        <td>Kolom 1, Baris 2</td>
        <td>Kolom 2, Baris 2</td>
      </tr>
      <tr>
        <td>Kolom 1, Baris 3</td>
        <td>Kolom 2, Baris 3</td>
      </tr>
    </table>
  </body>
</html>

```
