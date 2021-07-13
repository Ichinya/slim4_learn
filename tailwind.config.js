module.exports = {
    important: true,
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            display: ['Gilroy', 'sans-serif'],
            body: ['Graphik', 'sans-serif']
        },
        extend: {
            color: {
                grey: '#f5f5f5',
                cyan: '#9cdbff',
            },
            margin: {
                '96': '24rem',
                '128': '32rem'
            }
        },
    },
    variants: {
        opacity: ['responsive', 'hover'],
        extend: {},
    },
    plugins: [],
}
