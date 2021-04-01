"use strict";

const API = 'http://localhost/';

const request = (url, data) =>
{
    return fetch(url, {
        method: "PUT",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data),
    })
        .then(result => result.json())
        .catch(e => console.error(e.message));
}

const fillTextarea = data => {
    const textarea = document.querySelector('#text');
    if (!data || !data.content) return;

    textarea.textContent = data.content;

    if(!data.start || !data.end) return;

    textarea.selectionStart = data.start;
    textarea.selectionEnd = data.end;
}

const copy = (event) =>
{
    console.log('Копирование');
    const textarea = document.querySelector('#text');
    request(API + 'copy',{
            start: textarea.selectionStart,
            end: textarea.selectionEnd
        }).then(data => fillTextarea(data));
    event.preventDefault();
}

const cut = (event) =>
{
    console.log('Вырезание');
    const textarea = document.querySelector('#text');
    request(API + 'cut',{
        start: textarea.selectionStart,
        end: textarea.selectionEnd
    }).then(data => fillTextarea(data));
    event.preventDefault();
}

const paste = (event) =>
{
    console.log('Вставка');
    const textarea = document.querySelector('#text');
    request(API + 'paste',{
        start: textarea.selectionStart,
        end: textarea.selectionEnd
    }).then(data => fillTextarea(data));
    event.preventDefault();
}
document.querySelector('#bnCopy').addEventListener('click', copy);
document.querySelector('#bnCut').addEventListener('click', cut);
document.querySelector('#bnPaste').addEventListener('click', paste);