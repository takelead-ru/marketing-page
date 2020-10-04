const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: [
        './source/**/*.blade.php',
    ],
    theme: {
        container: {
            center: true,
            padding: {
                default: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
            },
        },
        extend: {
            fontFamily: {
                'sans': ['"Roboto Slab"', ...defaultTheme.fontFamily.sans],
                'serif': ['Nunito', ...defaultTheme.fontFamily.serif],
            },
        },
    },
    variants: {
        textColor: ({after}) => after(['group-hover']),
        opacity: ({after}) => after(['disabled']),
        cursor: ({after}) => after(['disabled']),
    },
    plugins: [],
}
