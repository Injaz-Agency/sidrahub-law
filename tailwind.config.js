// import defaultTheme from "tailwindcss/defaultTheme";
// import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            container: {
                center: true,
                padding: {
                    DEFAULT: "1rem",
                    sm: "1rem",
                    lg: "2rem",
                },
            },
            fontFamily: {
                montaga: ["Montaga", "sans-serif"],
                almarai: ["Almarai", "sans-serif"],
                cairo: ["Cairo", "sans-serif"],
            },
            colors: {
                transparent: "transparent",
                current: "currentColor",
                main: "#051459",
                second: "#FF8216",
                "sh-border": "#C6C6C6",
                "dark-gary": "#777777",
                "sh-background": "#FAFAFC",
            },
            boxShadow: {
                image: "0px 4px 4px 0px rgba(0, 0, 0, 0.25)",
                "small-box": "0px 4px 14px 0px rgba(0, 0, 0, 0.2)",
                "pack-box": "0px 10px 20px 0px rgba(0, 0, 0, 0.25)",
                "login-box": "0px 10px 30px 0px rgba(0, 0, 0, 0.1)",
            },
        },
    },

    plugins: [
        // forms
    ],
};
