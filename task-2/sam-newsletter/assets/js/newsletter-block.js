const { registerBlockType } = wp.blocks;
const { createElement } = wp.element;

registerBlockType('sam/newsletter', {
    title: 'Sam Newsletter',
    icon: 'email',
    category: 'widgets',

    edit: () => {
        return createElement(
            'div',
            { className: 'sam-newsletter-block' },
            createElement('h5', { className: 'sam-newsletter-subtitle' }, 'Get the latest feeds in your inbox'),
            createElement('h2', { className: 'sam-newsletter-title' }, 'Sign up for email to enjoy the latest trends.'),
            createElement(
                'form',
                { className: 'sam-newsletter-form', onSubmit: (e) => e.preventDefault() },
                createElement(
                    'div',
                    { className: 'form-group' },
                    createElement('label', { htmlFor: 'sam-newsletter-name' }, 'Enter your name here'),
                    createElement('input', {
                        type: 'text',
                        id: 'sam-newsletter-name',
                        readOnly: true,
                        placeholder: 'John Doe'
                    })
                ),
                createElement(
                    'div',
                    { className: 'form-group' },
                    createElement('label', { htmlFor: 'sam-newsletter-email' }, 'Enter your email here'),
                    createElement('input', {
                        type: 'email',
                        id: 'sam-newsletter-email',
                        readOnly: true,
                        placeholder: 'example@email.com'
                    })
                ),
                createElement('button', { type: 'button', className: 'sam-newsletter-submit', disabled: true }, 'Sign-up')
            )
        );
    },

    save: () => null
});
