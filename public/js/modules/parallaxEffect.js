gsap.registerPlugin(ScrollTrigger)

// Parallax Images
const parallaxEffect = () => {
  // select all sections .with-parallax
  const containers = gsap.utils.toArray(".with-parallax")

  containers.forEach((container) => {
    // get the image & the box
    const image = container.querySelector("img")
    const box = container.querySelector(".box-parallax")

    // create tween for the image
    gsap.to(image, {
      // yPercent: 0,
      // ease: "none",
      scrollTrigger: {
        // end: "bottom top",
        trigger: container,
        scrub: true,
        // markers: true,
      },
    })

    // create tween for the box
    gsap.to(box, {
      // yPercent: 0,
      // ease: "none",
      scrollTrigger: {
        // y: 20,
        trigger: container,
        // start: "top bottom",
        // end: "bottom top",
        scrub: true,
        // markers: true,
      },
    })
  })
}

export { parallaxEffect }
