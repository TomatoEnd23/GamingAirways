// ボタンをクリックした時にアニメーションをつける処理
//クリックするボタン
const btn = document.getElementById("scroll-button");

//スクロール先の目標コンテンツ
const target = document.getElementById("target");

//ボタンをクリックしたら目標コンテンツまでスクロールする
const buttonScrool = () => {
    target.scrollIntoView({behavior: "smooth"});
}  

//mainのIDを取得
const getMain = document.getElementById("main")

//mainのopacityを変更
const changeOpacity = (() => {
    getMain.style.opacity = "1"
    getMain.style.transition ="2s"
});



//ぶるぶる震えるアニメーション
const buruburu = () => {
    document.querySelector(`#buruburu`).animate(
        [
            {
                offset: 0.00,
                transform: 'translate( 0)'
            },
            {
                offset: 0.05,
                transform: 'rotate(-4deg)'
            },
            {
                offset: 0.10,
                transform: 'rotate(4deg)'
            },
            {
                offset: 0.15,
                transform: 'rotate(-4deg)'
            },
            {
                offset: 0.20,
                transform: 'rotate(4deg)'
            },
            {
                offset: 0.25,
                transform: 'rotate(-4deg)'
            },
            {
                offset: 0.30,
                transform: 'rotate(4deg)'
            },
            {
                offset: 0.30,
                transform: 'rotate(0)'
            }
        ],

        {
            duration: 2000,
            iterations: 1
        }
    );
};

const buttonClick = btn.addEventListener("click", () => {
    const promise1 = new Promise((resolve) => {
        buruburu();
        setTimeout(() => {
            buttonScrool();
        resolve();
        }, 500);
        }).then(() => {
        setTimeout(() => {
            changeOpacity();
        }, 500);
    },1000);
});




// スクロールに合わせてふわっと表示
window.addEventListener("load", function() {
    const target = document.querySelectorAll('.scr-target')
    const targetArray = Array.prototype.slice.call(target);
    const options = {
        root: null,
        rootMargin: '0px 0px',
        threshold: 0.2
    };
    
    const observer = new IntersectionObserver(callback, options)
    targetArray.forEach(function (tgt) {
      observer.observe(tgt)
    });
    
    function callback(entries) {
      entries.forEach(function(entry, i) {
        const target = entry.target;
        if (entry.isIntersecting && !target.classList.contains('is-active')) {
          const delay = i * 200
          setTimeout(function(){
            target.classList.add('is-active');
          },delay);
        }
      });
    };
    });


    //トップに戻るボタン
      const backbutton = document.getElementById("back");
      const topback = document.getElementById("top-main");

      const topbutton = backbutton.addEventListener("click",() => {
        topback.scrollIntoView({behavior: "smooth"});
      });

      // スクロールされたら表示

const buttonHidden =window.addEventListener("scroll",() => {
    if (window.pageYOffset > 100) {
        back.style.opacity = "1";
      } else if (window.pageYOffset < 100) {
        back.style.opacity = "0";
      }
});

//mainの表示非表示
// const windowHeight = window.outerHeight
const mainHidden = window.addEventListener ("scroll",() => {
    if (window.pageYOffset > 100) {
        getMain.style.opacity = "1";
        getMain.style.transition ="3s"
      } else if (window.pageYOffset < 100) {
        getMain.style.opacity = "0";
        getMain.style.transition ="3s"
      }
});