import { createIcons, icons } from 'lucide';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

createIcons({
    icons,
});

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(ScrollToPlugin);

// Respect accessibility preferences
if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {

    // Fade Up
    gsap.utils.toArray("[data-reveal]").forEach((element) => {
        gsap.fromTo(
            element,
            {
                y: 100,
                opacity: 0,
                scale: 0.96,
            },
            {
                y: 0,
                opacity: 1,
                scale: 1,
                duration: 1.2,
                ease: "power4.out",
                scrollTrigger: {
                    trigger: element,
                    start: "top 90%",
                    toggleActions: "play none none reverse",
                },
            }
        );
    });

    // Stagger Animation
    gsap.utils.toArray("[data-reveal-stagger]").forEach((container) => {
        gsap.fromTo(
            container.children,
            {
                y: 80,
                opacity: 0,
                scale: 0.92,
            },
            {
                y: 0,
                opacity: 1,
                scale: 1,
                duration: 1,
                stagger: 0.2,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: container,
                    start: "top 85%",
                    toggleActions: "play none none reverse",
                },
            }
        );
    });

    // Fade In
    gsap.utils.toArray("[data-fade]").forEach((element) => {
        gsap.from(element, {
            opacity: 0,
            duration: 0.7,
            ease: "power2.out",
            scrollTrigger: {
                trigger: element,
                start: "top 90%",
                toggleActions: "play none none reverse",
            },
        });
    });

    gsap.utils.toArray("[data-blur-reveal]").forEach((element) => {
        gsap.fromTo(
            element,
            {
                opacity: 0,
                y: 50,
                filter: "blur(12px)",
            },
            {
                opacity: 1,
                y: 0,
                filter: "blur(0px)",
                duration: 1.3,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: element,
                    start: "top 88%",
                    toggleActions: "play none none reverse",
                },
            }
        );
    });


    const element = document.querySelector("#typing-text");

    if (element) {
        const words = [
            "AOLC Celebration",
        ];

        const state = { length: 0 };
        let index = 0;

        function typeNext() {
            const word = words[index];

            gsap.to(state, {
                length: word.length,
                duration: word.length * 0.1,
                ease: "none",
                onUpdate: () => {
                    element.textContent = word.slice(
                        0,
                        Math.floor(state.length)
                    );
                },
                onComplete: () => {
                    gsap.delayedCall(1.5, () => {
                        gsap.to(state, {
                            length: 0,
                            duration: word.length * 0.05,
                            ease: "none",
                            onUpdate: () => {
                                element.textContent = word.slice(
                                    0,
                                    Math.floor(state.length)
                                );
                            },
                            onComplete: () => {
                                index = (index + 1) % words.length;
                                typeNext();
                            }
                        });
                    });
                }
            });
        }

        typeNext();
    }


    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            const targetId = this.getAttribute("href");

            if (!targetId || targetId === "#") return;

            const target = document.querySelector(targetId);

            if (!target) return;

            e.preventDefault();

            gsap.to(window, {
                duration: 1.2,
                scrollTo: {
                    y: target,
                    offsetY: 80,
                },
                ease: "power3.inOut",
            });

            history.pushState(null, "", targetId);
        });
    });

}