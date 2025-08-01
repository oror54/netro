function showModal({ title, body, actions = [], className, showCloseButton = true }) {
	const modal = document.getElementById("modal");
	modal.className = "modal" + (className ? " " + className : "");
	modal.querySelector(".modal-title p").innerHTML = title || "";
	modal.querySelector(".modal-body p").innerHTML = body || "";

	// header 영역 제어
	const header = modal.querySelector(".modal-header");
	const closeBtn = modal.querySelector(".modal-close");
	if (!title && !showCloseButton) {
		header.style.display = "none";
	} else {
		header.style.display = "flex";
		closeBtn.style.display = showCloseButton ? "flex" : "none";
	}

	const actionsDiv = modal.querySelector(".modal-actions");
	actionsDiv.innerHTML = "";
	actions.forEach(({ text, className, onClick }) => {
		const btn = document.createElement("button");
		btn.textContent = text;
		btn.className = className || "";
		btn.onclick = () => {
			if (onClick) onClick();
			hideModal();
		};
		actionsDiv.appendChild(btn);
	});
	modal.style.display = "flex";
	document.body.style.overflow = "hidden"; // 모달 열릴 때 스크롤 막기 추가
}

function hideModal() {
	document.getElementById("modal").style.display = "none";
	document.body.style.overflow = ""; // 모달 닫힐 때 스크롤 복원 추가
}

// 중복확인 모달 표시 함수
function showDuplicateCheckModal(message, isSuccess = true, showCloseButton = true) {
	showModal({
		title: '',
		className: 'duplicateCheck',
		body: message,
		actions: [
			{ text: '확인', className: 'btn-green' }
		],
		showCloseButton
	});
}

// 유효시간 만료 모달 표시 함수
function showValidityPeriodModal(showCloseButton = true) {
	showModal({
		title: '',
		className: 'validityPeriod',
		body: '유효 시간이 만료되었습니다.<br>재발송 후 다시 시도해 주세요.',
		actions: [
			{ text: '확인', className: 'btn-green' }
		],
		showCloseButton
	});
}

// 확인 모달 표시 함수
function showConfirmationModal(message, showCloseButton = true, className = '') {
	showModal({
		title: '',
		className: 'confirmation' + (className ? ' ' + className : ''),
		body: message,
		actions: [
			{ text: '확인', className: 'btn-green' }
		],
		showCloseButton
	});
}

// 선택 모달 표시 함수 (취소/확인 버튼)
function showChoiceModal(message, onConfirm, showCloseButton = true, className = "") {
	showModal({
		title: "",
		className: "confirmation" + (className ? " " + className : ""),
		body: message,
		actions: [
			{ text: "취소", className: "btn-gray" },
			{ text: "확인", className: "btn-green", onClick: onConfirm },
		],
		showCloseButton,
	});
}

document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll(".modal-close").forEach(function(btn) {
    btn.onclick = hideModal;
  });
});
