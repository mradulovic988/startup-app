const sh = require('shelljs');
const path = require('path');

const destPath = path.resolve(path.dirname(__filename), '../pages');

sh.rm('-rf', `${destPath}/*`)

