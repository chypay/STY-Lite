/*
 * @FilePath: /STY-Lite/assets/js/weeWhite.js
 * @author: Wibus
 * @Date: 2021-07-23 11:56:27
 * @LastEditors: Wibus
 * @LastEditTime: 2021-08-31 16:49:35
 * Coding With IU
 */
function checkClass (arr, v) {
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] == v) {
            return i;
        }
    }
    return -1;
}
var actionSidebar = document.getElementById('action-sidebar')
var actionMenu = document.getElementById('action-menu')
// 手机
function FactionMenu(active){
    var mobileNavbar = document.getElementById('mobile-navbar')
    // console.log('actionMenu')
    if(active == 'end'){
        document.body.classList.remove('active')
        mobileNavbar.classList.remove('active')
    }else{
        document.body.classList.add('active')
        mobileNavbar.classList.add('active')
    }  
}
// 通用
function FactionSidebar(active) {
    var sidebarCollapse = document.getElementById('sidebar-collapse')
    // console.log('actionSidebar')
    if(active == 'end'){
        document.body.classList.remove('active')
        sidebarCollapse.classList.remove('active')
    }else{
        document.body.classList.add('active')
        sidebarCollapse.classList.add('active')
    }    
}
console.log (
    "\n %c  Typecho-STY Lite Version https://iucky.cn ",
    " color: #fff; padding:5px 0; border-radius: 66px; background: linear-gradient(145deg, #22d3d1, #1db1b0); box-shadow:  36px 36px 71px #158483, -36px -36px 71px #2bffff;",
);
// 初始化评论按钮
window.comment_init = function () {
    const commentsReply = document.querySelectorAll('.comment_reply a')
    const replyForm = document.querySelector('.reply')
    const isComment = document.querySelector('.post-form.is-comment')
    for (let el of commentsReply) {
        el.addEventListener('click', e => {
            // 给恢复按钮绑定事件 获取parent-id
            const href = e
                .target
                .getAttribute('href')
            window.parentId = href.match(/replyTo=(\d+)/)[1]
            // 弹出回复框
            replyForm.removeAttribute('style')
            if (isComment.classList.contains('active')) 
                isComment
                    .classList
                    .remove('active')
            setTimeout(() => {
                document
                    .getElementById('cancel-comment-reply-link')
                    .addEventListener('click', () => {
                        replyForm.style.display = 'none'
                    })
            })
        })
    }
}
window.domParse = new DOMParser()
window.parser = dom => {
    return window
        .domParse
        .parseFromString(dom, 'text/html')
}
window.scrollSmoothTo = function scrollSmoothTo(position) {
    if (!window.requestAnimationFrame) {
        window.requestAnimationFrame = function (callback, element) {
            return setTimeout(callback, 17)
        }
    }
    // 当前滚动高度
    let scrollTop = document.documentElement.scrollTop || document.body.scrollTop
    // 滚动step方法
    const step = function () {
        // 距离目标滚动距离
        let distance = position - scrollTop
        // 目标滚动位置
        scrollTop = scrollTop + distance / 5
        if (Math.abs(distance) < 1) {
            window.scrollTo(0, position)
        } else {
            window.scrollTo(0, scrollTop)
            requestAnimationFrame(step)
        }
    }
    step()
}