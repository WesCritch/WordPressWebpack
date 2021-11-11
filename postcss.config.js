postcssConfig = {
	plugins: [
		require("tailwindcss"),
		process.env.NODE_ENV === "production" ? require("autoprefixer") : null,
	],
}

if (process.env.NODE_ENV === "production") {
	postcssConfig.plugins.push(
		require("cssnano")({
			preset: "default",
		})
	)
}

module.exports = postcssConfig
