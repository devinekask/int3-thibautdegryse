https://p5js.org/examples/simulate-particles.html

```javascript
import lottie from 'lottie-web'

lottie.loadAnimation({
  container: document.body, // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'assets/lottie/bump.json' // the path to the animation json
});
```

```javascript
externals: {
  'lottie-web': 'joske'
}
```

Font loading

