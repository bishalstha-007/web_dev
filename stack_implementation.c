#include <stdio.h>
#define SIZE 7
int stack[SIZE];
int top = -1;

int isEmpty()
{
    if (top == -1)
    {
        return 1;
    }
    else
        return 0; 
}

int isFull()
{
    if (top == SIZE - 1)
        return 1;
    else
        return 0;
}

void push(int data)
{
    if (isFull())
        printf("stack is full.\n");
    else
    {
        top = top + 1;
        stack[top] = data;
    }
}

void pop()
{
    if (isEmpty())
        printf("Stack is empty.\n");
    else
    {
        printf("Popping %d from the stack.\n", stack[top]);
        top--;
    }
}

void peek()
{
    if (isEmpty())
        printf("Nothing to peek, stack is empty\n");
    else
        printf("Top element: %d\n", stack[top]);
}

void display()
{
    if (isEmpty())
        printf("Stack is empty !\n");
    else
    {
        printf("Displaying stack elements: \n");
        for (int i = top; i >= 0; i--)
        {
            printf("%d\t", stack[i]);
        }
    }
}

int main()
{
    push(11);
    peek();
    push(20);
    pop();
    push(9);
    push(30);
    push(5);
    display();
}