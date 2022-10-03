
/* My Github : https://github.com/restugbk */

const fpPromise = import('https://openfpcdn.io/fingerprintjs/v3')
.then(FingerprintJS => FingerprintJS.load())

fpPromise
.then(fp => fp.get())
.then(result => {
    const visitorId = result.visitorId
    console.log(visitorId)
})

/* Result : 9c6195dd8fee83613fca125301f7c4cf */
