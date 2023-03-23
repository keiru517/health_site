const defaultTheme = require("tailwindcss/defaultTheme");
const plugin = require("tailwindcss/plugin");

const twColors = require("tailwindcss/colors");
const svgToDataUri = require("mini-svg-data-uri");

//add default to colors so we don't always need -500 for base shade
Object.entries(twColors).forEach(
    ([name, color]) => (color.DEFAULT = color[500])
);

const colors = {
    ...twColors,
    transparent: 'transparent',
    primary: {
        DEFAULT: "#0b3e6f",
        50: "#98C4F9",
        100: "#7BB4F7",
        200: "#4193F4",
        300: "#0E73EA",
        400: "#0A56B0",
        500: "#073A76",
        600: "#052C59",
        700: "#041E3C",
        800: "#020F1F",
        900: "#000102",
    },
    secondary: {
        DEFAULT: "#35A2FE",
        50: "#AFDDFF",
        100: "#95D2FF",
        200: "#62BDFF",
        300: "#2FA8FF",
        400: "#0092FB",
        500: "#0074C8",
        600: "#00599A",
        700: "#003F6C",
        800: "#00243E",
        900: "#000A10",
    },
    accent: {
        DEFAULT: "#82D300",
        50: "#D3FF8C",
        100: "#CBFF77",
        200: "#BBFF4E",
        300: "#ACFF26",
        400: "#9BFC00",
        500: "#82D300",
        600: "#6CAF00",
        700: "#568C00",
        800: "#406800",
        900: "#2A4400",
    },
};

module.exports = {
    experimental: {
        applyComplexClasses: true,
    },
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],
    safelist: [/data-theme$/],
    theme: {
        extend: {
            colors,
            fontFamily: {
                sans: ["Roboto", ...defaultTheme.fontFamily.sans],
                serif: ["Roboto Condensed", ...defaultTheme.fontFamily.serif],
            },
            fontSize: {
                "2xs": ["0.6rem", { lineHeight: "0.75rem" }],
            },
            screens: {
                lg: "1200px",
                xl: "1400px",
                "2xl": "1920px",
            },
            backgroundImage: (theme) => ({
                "multiselect-caret": `url("${svgToDataUri(
                    `<svg viewBox="0 0 320 512" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>`
                )}")`,
                "multiselect-spinner": `url("${svgToDataUri(
                    `<svg viewBox="0 0 512 512" fill="${theme(
                        "colors.green.500"
                    )}" xmlns="http://www.w3.org/2000/svg"><path d="M456.433 371.72l-27.79-16.045c-7.192-4.152-10.052-13.136-6.487-20.636 25.82-54.328 23.566-118.602-6.768-171.03-30.265-52.529-84.802-86.621-144.76-91.424C262.35 71.922 256 64.953 256 56.649V24.56c0-9.31 7.916-16.609 17.204-15.96 81.795 5.717 156.412 51.902 197.611 123.408 41.301 71.385 43.99 159.096 8.042 232.792-4.082 8.369-14.361 11.575-22.424 6.92z"></path></svg>`
                )}")`,
                "multiselect-remove": `url("${svgToDataUri(
                    `<svg viewBox="0 0 320 512" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"></path></svg>`
                )}")`,
            }),
        },
    },

    plugins: [
        require("daisyui"),
        plugin(({ addUtilities }) => {
            const newUtilities = {
                ".position-unset": {
                    position: "unset !important",
                },
            };
            addUtilities(newUtilities);
        }),
        function ({ addBase, theme }) {
            function extractColorVars(colorObj, colorGroup = "") {
                return Object.keys(colorObj).reduce((vars, colorKey) => {
                    const value = colorObj[colorKey];

                    const newVars =
                        typeof value === "string"
                            ? { [`--color${colorGroup}-${colorKey}`]: value }
                            : extractColorVars(value, `-${colorKey}`);

                    return { ...vars, ...newVars };
                }, {});
            }

            addBase({
                ":root": extractColorVars(theme("colors")),
            });
        },
    ],
    daisyui: {
        themes: [
            {
                dark: {
                    primary: colors.primary[500],
                    "primary-focus": colors.primary[400],
                    "primary-content": "#ffffff",
                    secondary: colors.secondary[500],
                    "secondary-focus": colors.secondary[600],
                    "secondary-content": "#ffffff",
                    accent: colors.accent[500],
                    "accent-focus": colors.accent[600],
                    "accent-content": "#ffffff",
                    neutral: "#1c1c1c",
                    "neutral-focus": colors.primary[500],
                    "neutral-content": "#ffffff",
                    "base-100": "#242424",
                    "base-200": "#202020",
                    "base-300": "#1c1c1c",
                    // 'base-100': '#232D38',
                    // 'base-200': '#192028',
                    // 'base-300': '#0F1318',
                    "base-content": "#ffffff",
                    info: "#2094f3",
                    success: "#01B481",
                    warning: "#ff9d00",
                    error: "#ff0000",
                },
            },
        ],
    },
};
