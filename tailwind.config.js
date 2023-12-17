/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

export default {
    content: [
        "./templates/**/*.{twig,svg}"
    ],
    theme: {
        extend: {

            colors: {
                // The main background color of the page
                background: colors.slate[50],
                // The default text color
                // The prose class cannot pick up this color out of the box, so check usage of prose-slate etc.
                // See https://tailwindcss.com/docs/typography-plugin#adding-custom-color-themes
                // on how to completely customize colors of the prose class
                foreground: colors.slate[800],
                // The brand color, used for buttons etc. Also for dark mode for now.
                brand: colors.slate,
                // The default gray color
                gray: colors.slate,
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
}
