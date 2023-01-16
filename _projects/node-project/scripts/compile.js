/*

// destructured
// individual functions
import { double, triple, square } from "./math.js";
console.log(double(10))

// pulls all functions
// const math = require('./math.js');
console.log(double(4))
console.log(triple(4))
console.log(square(4))


import _ from 'lodash';
const exampleArr = [5, 6, 7, 8, 9];
const reversedArr = _.reverse(exampleArr);
console.log(reversedArr);

*/

import fileSystem from 'node:fs';

fileSystem.readdir('./css', function (err, files) {
    if (err) {
        console.error(err);
        return;
    }

    const cssFiles = files.filter(file => file.endsWith('.css'));
    let totalContent = '';
    const destination = 'compiled.css';

    cssFiles.forEach(function (file) {

        var fileContents = fileSystem.readFileSync(`./css/${file}`, 'utf8');
        if (file == 'compiled.css') {
            var fileContents = ''
        }

        totalContent += fileContents;
    })

    fileSystem.writeFileSync(`./css/${destination}`, totalContent, function (err) {
        if (err) {
            console.error(err);
            return;
        }
    })
    console.log("Done :)")
})
/*

The way I think about it ...

What does readdir do again?

    Asynchronously reads the contents of a give directory.
    We have our path of css and our callback

1) I need to go through every file that has "css" attached.

2) For each file I need to get the lines of code written on them.

    fs.copyFile( src, dest, mode, callback )

3) Create a copy of it and compile them into one new file.

    fileSystem.writeFileSync('<fileName>',<contenet>, callbackFunction)


*/
