// 유효성 검사 함수들
function validateUserId(value) {
	if (value.length < 6) return false;
	if (value.length >= 15 && !/[a-zA-Z]/.test(value)) return false;
	if (!/^[a-zA-Z0-9]+$/.test(value)) return false;
	return true;
}

function validatePassword(value) {
	if (value.length < 8 || value.length > 20) return false;
	if (!/[a-zA-Z]/.test(value) || !/[0-9]/.test(value) || !/[^a-zA-Z0-9]/.test(value)) return false;
	return true;
}

function validatePasswordConfirm(pw, confirm) {
	return pw === confirm && pw.length > 0;
}

function validateEmail(value) {
	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	return emailRegex.test(value);
}

// 휴대폰 번호 11자리 숫자만 허용 (하이픈 포함 형식도 허용)
function validatePhone(value) {
	// 010-1234-5678 형식 또는 11자리 숫자
	return /^(010-\d{4}-\d{4}|\d{11})$/.test(value);
}

// 메시지 색상만 바꿔주는 함수
function showValidationMessage(input, isValid) {
	let messageDiv = null;
	const wrappers = [".input-box-wrap", ".input-box", ".input-item-wrapper", ".input-item"];
	for (const selector of wrappers) {
		const parent = input.closest(selector);
		if (parent) {
			messageDiv = parent.querySelector(".input-message");
			if (messageDiv) break;
		}
	}
	if (!messageDiv) return;
	messageDiv.classList.remove("success", "error");
	messageDiv.classList.add(isValid ? "success" : "error");
	// input에 error 클래스 추가/제거
	if (isValid) {
		input.classList.remove("error");
	} else {
		input.classList.add("error");
	}
}

// 회원가입 폼 유효성 검사 및 버튼 활성화
function validateJoinForm() {
	const userId = document.getElementById("userId")?.value.trim();
	const userPw1 = document.getElementById("userPw1")?.value;
	const userPw2 = document.getElementById("userPw2")?.value;
	const email = document.getElementById("email")?.value.trim();
	const userPhone = document.getElementById("userPhone")?.value.trim();
	const name = document.getElementById("name")?.value.trim();
	const postcode = document.getElementById("postcode")?.value.trim();
	const address1 = document.getElementById("address1")?.value.trim();
	const termsChecked = document.getElementById("check1")?.checked;
	const collectChecked = document.getElementById("check2")?.checked;
	const isValid =
		userId &&
		userPw1 &&
		userPw2 &&
		userPw1 === userPw2 &&
		// email &&
		userPhone &&
		name &&
		postcode &&
		address1 &&
		termsChecked &&
		collectChecked;
	const joinBtn = document.querySelector(".join-btn");
	if (joinBtn) joinBtn.disabled = !isValid;
}

document.addEventListener("DOMContentLoaded", function () {
	// 아이디
	const userIdInput = document.getElementById("userId");
	if (userIdInput) {
		userIdInput.addEventListener("input", function () {
			showValidationMessage(this, validateUserId(this.value));
		});
	}
	// 비밀번호
	const pwInput = document.getElementById("userPw1");
	if (pwInput) {
		pwInput.addEventListener("input", function () {
			showValidationMessage(this, validatePassword(this.value));
			// 비밀번호 확인도 같이 검사
			const pw2 = document.getElementById("userPw2");
			if (pw2 && pw2.value) {
				showValidationMessage(pw2, validatePasswordConfirm(this.value, pw2.value));
			}
		});
	}
	// 비밀번호 확인
	const pw2Input = document.getElementById("userPw2");
	if (pw2Input && pwInput) {
		pw2Input.addEventListener("input", function () {
			showValidationMessage(this, validatePasswordConfirm(pwInput.value, this.value));
		});
	}
	// 이메일
	const emailInput = document.getElementById("email");
	if (emailInput) {
	  emailInput.addEventListener("input", function () {
	    showValidationMessage(this, validateEmail(this.value));
	  });
	}
	// 휴대폰 번호
	const phoneInput = document.getElementById("userPhone");
	const requestBtn = document.querySelector(".check-btn.request");
	const codeInput = document.getElementById("userCode");
	if (codeInput) {
		codeInput.disabled = true; // 기본 비활성화
	}
	if (phoneInput) {
		phoneInput.addEventListener("input", function () {
			// 숫자만 추출
			let numbers = this.value.replace(/[^\d]/g, "");
			// 11자리 이상 입력 방지
			if (numbers.length > 11) {
				numbers = numbers.slice(0, 11);
			}
			// 하이픈 자동 삽입 (010-1234-5678)
			let formatted = numbers;
			if (numbers.length > 3 && numbers.length <= 7) {
				formatted = numbers.slice(0, 3) + "-" + numbers.slice(3);
			} else if (numbers.length > 7) {
				formatted = numbers.slice(0, 3) + "-" + numbers.slice(3, 7) + "-" + numbers.slice(7);
			}
			this.value = formatted;
			showValidationMessage(this, validatePhone(this.value));
			// 휴대폰 번호가 바뀌면 인증번호 입력창 비활성화
			if (codeInput) codeInput.disabled = true;
		});
	}
	if (requestBtn && phoneInput && codeInput) {
		requestBtn.addEventListener("click", function () {
			// 휴대폰 번호가 유효할 때만 인증번호 입력창 활성화
			if (validatePhone(phoneInput.value)) {
				codeInput.disabled = false;
				codeInput.focus();
			} else {
				codeInput.disabled = true;
				alert("올바른 휴대폰 번호를 입력해 주세요.");
			}
		});
	}
});
