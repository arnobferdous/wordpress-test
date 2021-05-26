const path = require('path')
const miniCss = require('mini-css-extract-plugin')

module.exports = {
    entry: "./src/index.js",
    output: {
        filename: "js/bundle.js",
        path: path.resolve(__dirname, 'dist')
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: 'babel-loader'
            },
            {
                test: /\.(scss|sass)$/,
                use: [
                    { loader: miniCss.loader},
                    { loader: 'css-loader?url=false' },
                    { loader: 'sass-loader' },
                ]
            },
            {
                test: /\.(jpg?g|png|gif|svg)$/i,
                loader: 'file-loader'
            }
        ]
    },
    plugins: [
        new miniCss({
            filename: 'css/app.css'
        })
    ]
}