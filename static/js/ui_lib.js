docReady = function(fn) {
	if (document.readyState === "complete" || document.readyState === "interactive") {
		window.setTime(fn,1);
	} else {
		document.addEventListener("DOMContentLoaded", fn);
	}
}

toggleClass = function(el,trgtClss) {
	if (el.classList.contains(trgtClss)){
		el.classList.remove(trgtClss);
	} else {
		el.classList.add(trgtClss);
	}
}

toggleShow = function(trgt) {
	console.log('toggle show');
	toggleClass(trgt,'show');
}

toggleHide = function(trgt) {
	console.log('toggle hide');
	toggleClass(trgt,'hide');
}

addAction = function(trgt, trggr, actnFn) {
	trgt.addEventListener(trggr, () => {actnFn()});
}

allAddActions = function(trgts, trggr, actnFn) {
	trgts.forEach(trgt => addAction(trgt,trggr,actnFn));
}

getAll = function(slctr) {
	const trgts = document.querySelectorAll(slctr);
	if ( trgts[0] !== undefined ) {
		return trgts;
	}
	return false;
}

getOne = function(slctr) {
	const trgt = document.querySelector(slctr);
	if ( trgt !== undefined ) {
		return trgt;
	}
	return false;
}


docReady(function(){
	// toggle modal w/ btn
	const addBtn = getOne('button.add-item');

	action = function() {
		const modal = getOne('.add-item.modal');
		console.log(modal);
		if (modal) {
			toggleHide(modal);
		}
	}

	addAction(addBtn, 'click', action);

	const mdlClsBtns = getAll('.add-item.modal button');

	addAction(mdlClsBtns[0], 'click', action);

});
