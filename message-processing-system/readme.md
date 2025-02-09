# Message Processing System

## Overview
This system processes messages with varying priorities and ensures that messages are handled in the correct order based on the following rules:

1. Messages with higher priority (lower number) are processed first.
2. If priorities are equal, the original order of messages (FIFO principle) is maintained.
3. The output consists of messages in their final processing order.

## Example Usage

### Example 1
**Input:**
```python
[
    {"priority": 3, "message": "Log database backup"},
    {"priority": 1, "message": "System crash detected"},
    {"priority": 3, "message": "Sync user data"}
]
```
**Output:**
```python
['System crash detected', 'Log database backup', 'Sync user data']
```
**Explanation:**
Priority 1 message comes first, then priority 3 messages in their original order.

### Example 2
**Input:**
```python
[
    {"priority": 2, "message": "Deploy update"},
    {"priority": 2, "message": "Send notifications"},
    {"priority": 5, "message": "Generate report"}
]
```
**Output:**
```python
['Deploy update', 'Send notifications', 'Generate report']
```
**Explanation:**
Equal priority 2 messages maintain their order, followed by the priority 5 message.

## Requirements

1. The function accepts an array of objects, each containing `priority` (number) and `message` (string).
2. Maintains stable sorting to preserve the original order for equal priorities.
3. Handles empty input arrays appropriately.
4. Processes only messages with priority values between 1 and 5.
5. Returns an array of message strings in the final processing order.
6. Optimized for time complexity using a stable sorting algorithm.

## Explanation
- **Priority-Based Sorting:** Messages are sorted in ascending order based on priority.
- **FIFO for Equal Priorities:** The original order is maintained for messages with the same priority.
- **Efficient Processing:** The sorting operation runs in O(n log n) time complexity.

This ensures an optimal and predictable message processing order.
