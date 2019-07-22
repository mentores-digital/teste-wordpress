require('dotenv').config();


module.exports = {    
    context: 'assets',
    entry: {
        styles: './scss/style.scss',
        scripts: './scripts/main.js'
    },
    devtool: 'cheap-module-eval-source-map',
    outputFolder: '../assets',
    publicFolder: 'assets',
    proxyTarget: process.env.URL,
    watch: [
        '../**/*.php'
    ]
}