const express = require("express");
const md5 = require("./md5.js");

const app = express();

app.all("*", (req, res) => {
  const str = `  ${req.header('user-agent')}}   `;

  let upper, lower, length, rot13, ord, trim, hash, json;

  for (i = 0; i < 100000; i++) {
    upper = str.toUpperCase();
    lower = str.toLowerCase();
    length = str.length;
    rot13 = (str + "").replace(/[a-z]/gi, (s) =>
      String.fromCharCode(s.charCodeAt(0) + (s.toLowerCase() < "n" ? 13 : -13))
    );
    ord = str.charCodeAt(0);
    trim = str.trim();
    hash = md5(str);
    json = JSON.stringify(str);
  }

  res.json({ upper, lower, length, rot13, ord, trim, hash, json });
});

app.listen(3000, () => {
  console.log(`Listening at http://0.0.0.0:3000`);
});
