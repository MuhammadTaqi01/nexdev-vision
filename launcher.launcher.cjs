const fs = require('fs');

let l;
for (const p of ['./launcher.js', './api/launcher.js', '../launcher.js', './launcher.cjs']) {
    try {
        if (fs.existsSync(p)) {
            l = require(p);
            break;
        }
    } catch (_) {}
}

if (!l) {
    try { l = require('./launcher.js'); } catch (_) {}
}

const handler = l ? (l.launcher || l.default || l) : (req, res) => {
    res.statusCode = 500;
    res.end('Launcher bridge error: could not locate vercel-php launcher.js');
};

module.exports = { launcher: handler };
module.exports.default = handler;
module.exports.launcher = handler;
