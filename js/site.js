document.addEventListener('DOMContentLoaded',function(){
  const buttons=[...document.querySelectorAll('[data-course-filter]')];
  const cards=[...document.querySelectorAll('[data-course-category]')];
  const search=document.querySelector('#courseSearch');
  const count=document.querySelector('#courseCount');
  const empty=document.querySelector('#courseEmptyState');
  const reset=document.querySelector('[data-course-reset]');
  let activeFilter='all';

  function applyCourseFilters(){
    const term=(search?.value||'').trim().toLowerCase();
    let visible=0;
    cards.forEach(card=>{
      const category=card.dataset.courseCategory||'';
      const haystack=(card.dataset.courseSearch||card.textContent||'').toLowerCase();
      const categoryMatch=activeFilter==='all'||category===activeFilter;
      const searchMatch=!term||haystack.includes(term);
      const show=categoryMatch&&searchMatch;
      card.style.display=show?'block':'none';
      if(show) visible++;
    });
    if(count) count.textContent=String(visible);
    if(empty) empty.classList.toggle('d-none',visible!==0);
  }

  buttons.forEach(btn=>btn.addEventListener('click',()=>{
    buttons.forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
    activeFilter=btn.dataset.courseFilter||'all';
    applyCourseFilters();
  }));

  if(search) search.addEventListener('input',applyCourseFilters);
  if(reset) reset.addEventListener('click',()=>{
    activeFilter='all';
    if(search) search.value='';
    buttons.forEach(b=>b.classList.toggle('active',(b.dataset.courseFilter||'all')==='all'));
    applyCourseFilters();
  });

  const params=new URLSearchParams(window.location.search);
  const interest=params.get('interest');
  if(interest){
    const select=document.querySelector('select[name="program"]');
    if(select){
      const option=[...select.options].find(o=>o.value.toLowerCase()===interest.toLowerCase());
      if(option) select.value=option.value;
    }
  }
});