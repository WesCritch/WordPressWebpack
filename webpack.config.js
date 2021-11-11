const path = require("path")
const MiniCssExtractPlugin = require("mini-css-extract-plugin")
const { CleanWebpackPlugin } = require("clean-webpack-plugin")
const currentTask = process.env.npm_lifecycle_event

let cssConfig = {
	test: /\.css$/,
	exclude: /node_modules/,
	use: ["style-loader", "css-loader"],
}

const config = {
	mode: "development",
	entry: "./js/script.js",
	plugins: [],
	module: {
		rules: [cssConfig],
	},
}

if (currentTask == "server") {
	config.mode = "development"
	;(config.devtool = "source-map"(
		(config.output = {
			filename: "js/bundled.js",
			publicPath: "http://localhost:8008",
		})
	)),
		config.plugins.push(
			new MiniCssExtractPlugin({ filename: "main.[contentHash].css" }),
			new CleanWebpackPlugin()
		)
}

module.exports = config
