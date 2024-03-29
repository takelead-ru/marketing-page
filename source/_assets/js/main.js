import 'alpinejs'

window.subscribeForm = () => {
    return {
        sending: false,
        success: null,
        fail: null,

        email: '',

        async submit() {
            this.success = null
            this.fail = null
            this.sending = true

            try {
                // TODO: send to https://app.takelead.ru
                // FIXME: https://github.com/github/fetch/issues/318#issuecomment-249573195
                const result = await fetch('https://ap2.dev/messages', {
                    method: 'POST',
                    mode: "no-cors",
                    cache: "no-cache",
                    headers: {
                        'Content-Type': 'application/json;charset=utf-8'
                    },
                    body: JSON.stringify({
                        name: 'No name',
                        email: this.email,
                        message: 'takelead.ru: Newsletter subscription',
                    }),
                })

                if (! result.ok) {
                    throw new Error('Error')
                }

                if (result.success ?? false) {
                    this.success = true
                    this.sending = false
                }
            } catch (e) {
                console.log(e)
                this.fail = true
                this.sending = false
            }
        },
    }
}
