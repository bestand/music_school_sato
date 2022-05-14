const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
    
module.exports = {    
    entry: './src/index.js',  
    output: { 
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist'),
    },
    module: {
        rules: [
            {
                test: /\.(scss|css)$/i,
                use: [ MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader' ],// 後ろから順番に適用
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'style.css',
        }),
    ],
    
    devtool: 'source-map',    
    watchOptions: {
        ignored: /node_modules/
    },
};