#!/bin/bash

tool() {
    BASE="$(pwd)"

    echo "======================"
    echo "      RED-TOOL"
    echo "======================"
    echo "1 = CN"
    echo "2 = PP"
    echo "3 = SI"
    echo "0 = EXIT"
    echo "======================"

    read -p "Enter choice: " choice

    case "$choice" in
        1)
            cd "$BASE/cn" || return
            ;;
        2)
            cd "$BASE/pp" || return
            ;;
        3)
            cd "$BASE/si" || return
            ;;
        0)
            return
            ;;
        *)
            echo "Invalid choice"
            return
            ;;
    esac

    echo "Current folder:"
    pwd
}
