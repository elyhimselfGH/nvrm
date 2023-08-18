function setUserData(data) {
    if (!data) return;
    const userNameElement = document.getElementById("user_filldata-username");
    if (userNameElement) {
        const { userName } = JSON.parse(data.replaceAll("'", '"'));
        userNameElement.textContent = userName;
    } else setTimeout(() => setUserData(data), 1);
}

function setCasesData(data) {
    if (!data) return;
    const caseIdElement = document.getElementById("case_filldata-caseid");
    if (caseIdElement) {
        const { caseid, reason, moderator, date, action } = JSON.parse(data.replaceAll("'", '"'));
        const caseIdElement = document.getElementById("case_filldata-caseid");
        if (caseIdElement) caseIdElement.textContent = caseid;
        const dateElement = document.getElementById("case_filldata-date");
		if (dateElement) dateElement.textContent = 'Published on ' + date.split(', ')[0] + ' at ' + (date.split(', ')[1].slice(0, -3) || '00:00');
        const reasonElement = document.getElementById("case_filldata-reason");
        if (reasonElement) reasonElement.textContent = reason;
        const moderatorElement = document.getElementById("case_filldata-moderator");
        if (moderatorElement) moderatorElement.textContent = moderator;
        const actionElement = document.getElementById("case_filldata-action");
        if (actionElement) actionElement.textContent = action;   
    } else setTimeout(() => setCasesData(data), 1);
}

function setTransactionsData(data) {
    if (!data) return;
    const transactionIdElement = document.getElementById("transaction_filldata-transactionid");
    if (transactionIdElement) {
        const { transactionid, price, date, paidwith, submitter, description } = JSON.parse(data.replaceAll("'", '"'));
        const transactionIdElement = document.getElementById("transaction_filldata-transactionid");
        if (transactionIdElement) transactionIdElement.textContent = transactionid;
        const priceElement = document.getElementById("transaction_filldata-price");
		if (priceElement) priceElement.textContent = price;
        const dateElement = document.getElementById("transaction_filldata-date");
		if (dateElement) dateElement.textContent = 'Purchased ' + date.split(', ')[0] + ' at ' + (date.split(', ')[1].slice(0, -3) || '00:00');
        const receiptElement = document.getElementById("transaction_filldata-receipt");
		if (receiptElement) receiptElement.textContent = transactionid;
        const paidwithElement = document.getElementById("transaction_filldata-paidwith");
		if (paidwithElement) paidwithElement.textContent = paidwith;
        const submitterElement = document.getElementById("transaction_filldata-submitter");
		if (submitterElement) submitterElement.textContent = submitter;
        const descriptionElement = document.getElementById("transaction_filldata-description");
		if (descriptionElement) descriptionElement.textContent = description;
    } else setTimeout(() => setTransactionsData(data), 1);
}