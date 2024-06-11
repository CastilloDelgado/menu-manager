import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Gandhi-Sans", ...defaultTheme.fontFamily.sans],
                serif: ["Gandhi-Serif", ...defaultTheme.fontFamily.sans],
                title: ["Gilroy", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: "#fff1f3",
                    100: "#ffe0e4",
                    200: "#ffc7ce",
                    300: "#ffa0ab",
                    400: "#ff697a",
                    500: "#f93a50",
                    600: "#e72138",
                    700: "#c21327",
                    800: "#a01424",
                    900: "#851724",
                    950: "#48070f",
                },
            },
        },
    },

    plugins: [forms, typography],
};
