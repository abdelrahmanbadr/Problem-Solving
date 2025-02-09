function processMessages(messages) {
    // Handles empty messages
    if (!messages || messages.length === 0) return [];

    // Validate input and filter out messages with invalid priority
    const validMessages = messages.filter(msg => Number.isInteger(msg.priority) && msg.priority >= 1 && msg.priority <= 5)

    // Sort messages using priority while preserving original order for equal priority
    validMessages.sort((a,b) => a.priority - b.priority)

    // Extract and return only the message texts
    return validMessages.map(msg => msg.message);
}

const messages = [
    {"priority": 2, "message": "Deploy update"},
    {"priority": 2, "message": "Send notifications"},
    {"priority": 5, "message": "Generate report"}
];

console.log(processMessages(messages));
